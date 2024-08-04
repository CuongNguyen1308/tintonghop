<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Category::query()->latest('id')->paginate(10);
        return response()->json([
            "message" => "Danh sách danh mục " . request('page', 1),
            "data" => $data
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            DB::transaction(function () {
                $data = Category::query()->create(request()->all());
                return response()->json([
                    "message" => "Tạo mới thành công danh mục",
                    "data" => $data
                ], Response::HTTP_CREATED);
            }, 3);
        } catch (\Throwable $th) {
            //throw $th;
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        try {
            $data = Category::findOrFail($id);
            return response()->json([
                "message" => "Chi tiết danh mục id = " . $id,
                "data" => $data
            ]);
        } catch (\Throwable $th) {
            Log::error(__CLASS__ . '@' . __FUNCTION__, [$th]);
            if ($th instanceof ModelNotFoundException) {
                return response()->json([
                    "message" => "Không tồn tại danh mục id = " . $id,
                ], Response::HTTP_INTERNAL_SERVER_ERROR);
            }
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            $data = Category::query()->findOrFail($id);
            $data->update($request->all());
            return response()->json([
                "message" => "Cập nhật danh mục id = " . $id,
                "data" => $data
            ]);
        } catch (\Throwable $th) {
            Log::error(__CLASS__ . '@' . __FUNCTION__, [$th]);
            if ($th instanceof ModelNotFoundException) {
                return response()->json([
                    "message" => "Không tồn tại danh mục id = " . $id,
                ], Response::HTTP_INTERNAL_SERVER_ERROR);
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            Category::destroy($id);
            return response()->json([
                "message" => "Đã xóa người dùng id = " . $id,
            ], Response::HTTP_OK);
        } catch (\Throwable $th) {
            Log::error(__CLASS__ . '@' . __FUNCTION__, [$th]);
            if ($th instanceof ModelNotFoundException) {
                return response()->json([
                    "message" => "Không tồn tại người dùng id = " . $id,
                ], Response::HTTP_INTERNAL_SERVER_ERROR);
            }
        }
    }
}
