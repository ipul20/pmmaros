<?php


namespace App\Helpers;

use App\Models\Dokter;
use MrShan0\PHPFirestore\FirestoreClient;


class Helper
{
    // get data icon
    public static function icon()
    {
        $data = [
            'flaticon-squares-1', 'flaticon-technology', 'flaticon-squares', 'flaticon-menu-1', 'flaticon-menu-2', 'flaticon-settings-1', 'flaticon-folder-1', 'flaticon-folder-2', 'flaticon-folder-3',
            'flaticon-users', 'flaticon-users-1',
        ];
        return $data;
    }

    public static function cekStatus($status)
    {
        if ($status == 1) {
            return '<span class="label label-success label-inline font-weight-bolder mr-2">Aktif</span>';
        } else {
            return '<span class="label label-danger label-inline font-weight-bolder mr-2">Tidak Aktif</span>';
        }
    }

    public static function btn_aktif($status, $id)
    {
        if ($status == 1) {
            return ' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $id . '"
            title="Non Aktifkan" class="btn btn-icon btn-primary btn-sm m-1 nonAktif">
             <span class="svg-icon menu-icon">
                 <i class="flaticon-cancel"></i>
             </span>
         </a>';
        } else {
            return ' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $id . '"
            title="Aktifkan" class="btn btn-icon btn-success m-1 btn-sm aktif">
             <span class="svg-icon menu-icon">
                 <i class="flaticon2-check-mark"></i>
             </span>
         </a>';
        }
    }
    // get head title tabel
    public static function head($param)
    {
        return ucwords(str_replace('-', ' ', $param));
    }

    // replace spasi
    public static function replace($param)
    {
        return str_replace(' ', '', $param);
    }

    //button export
    public static function btn_export()
    {
        return '<a onclick="exportPDF()" class="btn btn-primary btn-sm">
                    <span class="svg-icon menu-icon">
                        <i class="flaticon-file-1"></i> Export PDF
                    </span>
                </a>';
    }

    // button create
    public static function btn_create()
    {
        return '<a onclick="createForm()" class="btn btn-success btn-sm">
                    <span class="svg-icon menu-icon">
                        <i class="flaticon-plus"></i> Add New
                    </span>
                </a>';
    }



    public static function btn_invoice($id)
    {
        if (true) {
            $edit = '<a onclick="editForm(' . $id . ')" class="btn btn-warning font-weight-bold">
            <span class="svg-icon menu-icon">
            <i class="flaticon-cart"></i> Bayar
        </span>
            </a> ';
        }
        return $edit;
    }

    public static function btn_view_dokumen($v)
    {
        $url = asset('landing/dokumen/' . $v);
        return '<a href="' . $url . '" target="_blank" class="btn btn-icon m-1 btn-success btn-sm">
                    <span class="svg-icon menu-icon">
                        <i class="flaticon-eye"></i>
                    </span>
                </a>';
    }

    // get data from tabel
    public static function btn_reservasi($id)
    {
        $edit = null;
        $delete = null;
        if (true) {
            $edit = '<a onclick="editForm(' . $id . ')" class="btn btn-icon btn-warning btn-sm">
                <span class="svg-icon menu-icon">
                    <i class="flaticon-edit"></i>
                </span>
            </a> ';
        }
        if (true) {
            $delete = ' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $id . '"
               title="Delete" class="btn btn-icon btn-danger btn-sm deleteData">
                <span class="svg-icon menu-icon">
                    <i class="flaticon2-trash"></i>
                </span>
            </a>';
        }
        return $edit . $delete;
    }
    //button reservasi
    public static function btn_action($id)
    {
        $edit = null;
        $delete = null;
        if (true) {
            $edit = '<a onclick="editForm(' . $id . ')" class="btn btn-icon btn-warning btn-sm m-1">
                <span class="svg-icon menu-icon">
                    <i class="flaticon-edit"></i>
                </span>
            </a><br>';
        }
        if (true) {
            $delete = ' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $id . '"
               title="Delete" class="btn btn-icon btn-danger btn-sm deleteData m-1">
                <span class="svg-icon menu-icon">
                    <i class="flaticon2-trash"></i>
                </span>
            </a><br>';
        }
        return $edit . $delete;
    }

    // button action


    // cek data menu role user
    public static function get_data($param)
    {
        $data = \DB::table($param)->get();
        return isset($data) ? $data : null;
    }
    public static function get_jenis()
    {
        $data = \DB::table("jenis")->get();
        return isset($data) ? $data : null;
    }

    public static function get_data_where($param, $id, $idd)
    {
        $data = \DB::table($param)->where($id, $idd)->get();
        return isset($data) ? $data : null;
    }
    public static function get_direktori($id)
    {
        $data = \DB::table('direktoris')->where('jenis_id', $id)->get();
        return isset($data) ? $data : null;
    }

    public static function cekNull($param)
    {
        if ($param == "") {
            return '-';
        } else {
            return $param;
        }
    }

    public static function getAkun($param)
    {
        $data = \DB::table('akun_bank')->where('id', $param)->first();
        return isset($data) ? $data : null;
    }


    //    generaate kode rm
    public static function gen_rm()
    {
        $tahunbulan = date('Ym');
        $v = DB::table('patients')->select('nrm')->where('nrm', '<>', '')->where('deleted', '0')
            ->orderBy('id', 'desc')->first();
        $no = isset($v->nrm) ? $v->nrm : null;
        if ($no == null) {
            $no = "001";
        } else {
            $no = (int)substr($no, -3);
            $no++;
        }
        return  'G' . sprintf("%03s", $no);
    }

    // cek absen


}
