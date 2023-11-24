<?php

namespace App\Http\Controllers\admin;

use App\Models\Benefit;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\ContentManagementSystem;
use App\Models\FrequentlyAskedQuestion;
use App\Models\Testimony;

class AdminContentManagementSystemController extends Controller
{
    public function index()
    {
    }

    public function edit()
    {
        // Tentang Kami
        // Judul Besar
        $teks_judul_tentang_kami_1 = ContentManagementSystem::where('key', 'teks_judul_tentang_kami_1')->first();
        $teks_sub_judul_tentang_kami_1 = ContentManagementSystem::where('key', 'teks_sub_judul_tentang_kami_1')->first();
        $gambar_tentang_kami_1 = ContentManagementSystem::where('key', 'gambar_tentang_kami_1')->first();

        $angka_banner_rating_1 = ContentManagementSystem::where('key', 'angka_banner_rating_1')->first();
        $teks_banner_rating_1 = ContentManagementSystem::where('key', 'teks_banner_rating_1')->first();

        $angka_banner_rating_2 = ContentManagementSystem::where('key', 'angka_banner_rating_2')->first();
        $teks_banner_rating_2 = ContentManagementSystem::where('key', 'teks_banner_rating_2')->first();

        $teks_banner_rating_3 = ContentManagementSystem::where('key', 'teks_banner_rating_3')->first();

        $gambar_banner_rating_1 = ContentManagementSystem::where('key', 'gambar_banner_rating_1')->first();
        $gambar_banner_rating_2 = ContentManagementSystem::where('key', 'gambar_banner_rating_2')->first();
        $gambar_banner_rating_3 = ContentManagementSystem::where('key', 'gambar_banner_rating_3')->first();

        $gambar_tentang_kami_2 = ContentManagementSystem::where('key', 'gambar_tentang_kami_2')->first();
        $teks_judul_tentang_kami_2 = ContentManagementSystem::where('key', 'teks_judul_tentang_kami_2')->first();
        $teks_sub_judul_tentang_kami_2 = ContentManagementSystem::where('key', 'teks_sub_judul_tentang_kami_2')->first();

        $teks_judul_tentang_kami_3 = ContentManagementSystem::where('key', 'teks_judul_tentang_kami_3')->first();
        $teks_sub_judul_tentang_kami_3 = ContentManagementSystem::where('key', 'teks_sub_judul_tentang_kami_3')->first();

        // Manfaat
        $teks_judul_manfaat_1 = ContentManagementSystem::where('key', 'teks_judul_manfaat_1')->first();
        $teks_sub_judul_manfaat_1 = ContentManagementSystem::where('key', 'teks_sub_judul_manfaat_1')->first();
        $gambar_manfaat_1 = ContentManagementSystem::where('key', 'gambar_manfaat_1')->first();

        $benefits = Benefit::all();

        // Kemitraan
        $teks_judul_kemitraan_1 = ContentManagementSystem::where('key', 'teks_judul_kemitraan_1')->first();
        $teks_sub_judul_kemitraan_1 = ContentManagementSystem::where('key', 'teks_sub_judul_kemitraan_1')->first();

        $teks_judul_kemitraan_2 = ContentManagementSystem::where('key', 'teks_judul_kemitraan_2')->first();
        $teks_sub_judul_kemitraan_2 = ContentManagementSystem::where('key', 'teks_sub_judul_kemitraan_2')->first();

        $teks_judul_kemitraan_3 = ContentManagementSystem::where('key', 'teks_judul_kemitraan_3')->first();
        $teks_sub_judul_kemitraan_3 = ContentManagementSystem::where('key', 'teks_sub_judul_kemitraan_3')->first();

        $teks_judul_kemitraan_4 = ContentManagementSystem::where('key', 'teks_judul_kemitraan_4')->first();
        $teks_sub_judul_kemitraan_4 = ContentManagementSystem::where('key', 'teks_sub_judul_kemitraan_4')->first();

        $teks_judul_kemitraan_5 = ContentManagementSystem::where('key', 'teks_judul_kemitraan_5')->first();
        $teks_sub_judul_kemitraan_5 = ContentManagementSystem::where('key', 'teks_sub_judul_kemitraan_5')->first();

        $teks_judul_kemitraan_6 = ContentManagementSystem::where('key', 'teks_judul_kemitraan_6')->first();
        $teks_sub_judul_kemitraan_6 = ContentManagementSystem::where('key', 'teks_sub_judul_kemitraan_6')->first();
        $gambar_kemitraan_1 = ContentManagementSystem::where('key', 'gambar_kemitraan_1')->first();

        $teks_judul_kemitraan_10 = ContentManagementSystem::where('key', 'teks_judul_kemitraan_10')->first();
        $teks_sub_judul_kemitraan_10 = ContentManagementSystem::where('key', 'teks_sub_judul_kemitraan_10')->first();

        $teks_judul_kemitraan_11 = ContentManagementSystem::where('key', 'teks_judul_kemitraan_11')->first();
        $teks_sub_judul_kemitraan_11_1 = ContentManagementSystem::where('key', 'teks_sub_judul_kemitraan_11_1')->first();
        $teks_sub_judul_kemitraan_11_2 = ContentManagementSystem::where('key', 'teks_sub_judul_kemitraan_11_2')->first();
        $teks_sub_judul_kemitraan_11_3 = ContentManagementSystem::where('key', 'teks_sub_judul_kemitraan_11_3')->first();
        $gambar_kemitraan_2 = ContentManagementSystem::where('key', 'gambar_kemitraan_2')->first();

        $teks_judul_kemitraan_7 = ContentManagementSystem::where('key', 'teks_judul_kemitraan_7')->first();
        $teks_sub_judul_kemitraan_7 = ContentManagementSystem::where('key', 'teks_sub_judul_kemitraan_7')->first();
        $gambar_kemitraan_3 = ContentManagementSystem::where('key', 'gambar_kemitraan_3')->first();

        $teks_judul_kemitraan_8 = ContentManagementSystem::where('key', 'teks_judul_kemitraan_8')->first();
        $teks_sub_judul_kemitraan_8 = ContentManagementSystem::where('key', 'teks_sub_judul_kemitraan_8')->first();
        $gambar_kemitraan_4 = ContentManagementSystem::where('key', 'gambar_kemitraan_4')->first();

        $teks_judul_kemitraan_9 = ContentManagementSystem::where('key', 'teks_judul_kemitraan_9')->first();
        $teks_sub_judul_kemitraan_9 = ContentManagementSystem::where('key', 'teks_sub_judul_kemitraan_9')->first();
        $gambar_kemitraan_5 = ContentManagementSystem::where('key', 'gambar_kemitraan_5')->first();


        // Testimoni & FaQ
        $testimonies = Testimony::all();

        $faqs = FrequentlyAskedQuestion::all();

        $gambar_testimoni_1 = ContentManagementSystem::where('key', 'gambar_testimoni_1')->first();
        $teks_testimoni_4 = ContentManagementSystem::where('key', 'teks_testimoni_4')->first();
        $link_button_pdf = ContentManagementSystem::where('key', 'link_button_pdf')->first();
        $link_button_whatsapp = ContentManagementSystem::where('key', 'link_button_whatsapp')->first();

        return view('pages.admin.content-management-system.index', compact(
            'teks_judul_tentang_kami_1',
            'teks_sub_judul_tentang_kami_1',
            'gambar_tentang_kami_1',
            'teks_sub_judul_tentang_kami_2',
            'teks_sub_judul_tentang_kami_3',
            'angka_banner_rating_1',
            'angka_banner_rating_2',
            'teks_banner_rating_1',
            'teks_banner_rating_2',
            'teks_banner_rating_3',
            'gambar_banner_rating_1',
            'gambar_banner_rating_2',
            'gambar_banner_rating_3',
            'gambar_tentang_kami_2',
            'teks_judul_tentang_kami_2',
            'teks_judul_tentang_kami_3',
            'teks_judul_manfaat_1',
            'teks_sub_judul_manfaat_1',
            'gambar_manfaat_1',
            'teks_judul_kemitraan_1',
            'teks_judul_kemitraan_2',
            'teks_judul_kemitraan_3',
            'teks_judul_kemitraan_4',
            'teks_judul_kemitraan_5',
            'teks_judul_kemitraan_6',
            'teks_judul_kemitraan_7',
            'teks_judul_kemitraan_8',
            'teks_judul_kemitraan_9',
            'teks_sub_judul_kemitraan_1',
            'teks_sub_judul_kemitraan_2',
            'teks_sub_judul_kemitraan_3',
            'teks_sub_judul_kemitraan_4',
            'teks_sub_judul_kemitraan_5',
            'teks_sub_judul_kemitraan_6',
            'teks_sub_judul_kemitraan_7',
            'teks_sub_judul_kemitraan_8',
            'teks_sub_judul_kemitraan_9',
            'gambar_kemitraan_1',
            'gambar_testimoni_1',
            'teks_testimoni_4',
            'teks_judul_kemitraan_10',
            'teks_judul_kemitraan_11',
            'teks_sub_judul_kemitraan_10',
            'teks_sub_judul_kemitraan_11_1',
            'teks_sub_judul_kemitraan_11_2',
            'teks_sub_judul_kemitraan_11_3',
            'gambar_kemitraan_2',
            'gambar_kemitraan_3',
            'gambar_kemitraan_4',
            'gambar_kemitraan_5',
            'link_button_pdf',
            'link_button_whatsapp',
            'testimonies',
            'faqs',
            'benefits'

        ));
    }

    public function update(Request $request)
    {
        $data_array = $request->input('data');

        DB::transaction(function () use ($data_array) {
            foreach ($data_array as $key => $value) {
                echo json_encode($key);
                ContentManagementSystem::where(['key' => $key])->update(['value' => $value]);
            }
        }, 3);
        return back();
    }
}
