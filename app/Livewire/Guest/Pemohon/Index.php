<?php

namespace App\Livewire\Guest\Pemohon;

use App\Models\DataPemohon;
use App\Models\Terdakwa;
use Carbon\Carbon;
use GuzzleHttp\Client;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithFileUploads;

class Index extends Component
{
    // Amarangganafedira1!
    use WithFileUploads;
    #[Layout('layouts.app')]

    public $nama_terdakwa = '';
    public $terdakwaId;
    public $suggestions = [];

    public $nama_pemohon;
    public $nik;
    public $tempat_lahir;
    public $tanggal_lahir;
    public $jenis_kelamin;
    public $alamat;
    public $agama;
    public $status_perkawinan;
    public $pekerjaan;
    public $nomor_hp;
    public $ktp_pemohon;
    public $ktp_pemberi;
    public $dokumen_pendukung;

    // protected $rules = [
    //     'ktp_pemohon' => 'required|mimes:pdf,doc,docx|max:2048', // hanya menerima PDF atau DOC dengan max 2MB
    // ];

    public function searchTerdakwa()
    {
        // Ambil saran dari database berdasarkan nama yang diinput
        $this->suggestions = Terdakwa::where('nama', 'like', '%' . $this->nama_terdakwa . '%')
            ->take(5)
            ->get(['id', 'nama'])
            ->toArray();
    }

    public function selectSuggestion($id, $nama)
    {
        $this->terdakwaId = $id; // Simpan id terdakwa yang dipilih
        $this->nama_terdakwa = $nama; // Simpan nama terdakwa yang dipilih
        $this->suggestions = []; // Kosongkan saran setelah memilih
    }

    public function submit()
    {
        // $this->validate(); // Validasi file

        // Simpan file ke direktori storage/app/documents
        // $ktp_path = $this->ktp_pemohon->store('documents');
        // $ktp_pemberi_path = $this->ktp_pemberi->store('documents');
        // $dokumen_pendukung_path = $this->dokumen_pendukung->store('documents');

        // Simpan path ke database
        // DataPemohon::create([
        //     'tanggal_pengambilan' => Carbon::now(),
        //     'terdakwa_id' => $this->terdakwaId,
        //     'nama_pemohon' => $this->nama_pemohon,
        //     'nik' => $this->nik,
        //     'tempat_lahir' => $this->tempat_lahir,
        //     'tanggal_lahir' => Carbon::now(),
        //     'jenis_kelamin' => $this->jenis_kelamin,
        //     'alamat' => $this->alamat,
        //     'agama' => $this->agama,
        //     'status_perkawinan' => $this->status_perkawinan,
        //     'pekerjaan' => $this->pekerjaan,
        //     'nomor_hp' => $this->nomor_hp,
        //     'ktp_pemohon_path' => $ktp_path,
        //     'ktp_pemberi_kuasa_path' => $ktp_pemberi_path,
        //     'dokumen_pendukung_path' => $dokumen_pendukung_path,
        // ]);

        DataPemohon::create([
            'tanggal_pengambilan' => Carbon::now(),
            'terdakwa_id' => $this->terdakwaId,
            'nama_pemohon' => $this->nama_pemohon,
            'nik' => "0812625172671",
            'tempat_lahir' => "siak",
            'tanggal_lahir' => Carbon::now(),
            'jenis_kelamin' => "Laki-laki",
            'alamat' => "Siak",
            'agama' => "Islam",
            'status_perkawinan' => "Sudah Menikah",
            'pekerjaan' => "Ngoding aja",
            'nomor_hp' => "08125125712",
            'ktp_pemohon_path' => null,
            'ktp_pemberi_kuasa_path' => null,
            'dokumen_pendukung_path' => null,
            // 'ktp_pemohon_path' => $ktp_path,
            // 'ktp_pemberi_kuasa_path' => $ktp_pemberi_path,
            // 'dokumen_pendukung_path' => $dokumen_pendukung_path,
        ]);

        $this->sendNotificationToFonnte();
        // Tampilkan pesan sukses
        session()->flash('message', 'Dokumen berhasil diunggah dan disimpan di database!');
    }

    private function sendNotificationToFonnte()
    {
        $token = "S5bJrbeynjfVvexibk2C";
        // $target = "6285161762468";
        $target = "6281266941924";

        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.fonnte.com/send',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => array(
        'target' => $target,
        // 'message' => $this->nama_pemohon . " " . "Mengajukan permohonan di sistem",
        'message' => "Testing notifikasi Whatsapp",
        ),
        CURLOPT_HTTPHEADER => array(
            "Authorization: $token"
        ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
    }

    public function render()
    {
        // var_dump($this->nama_terdakwa);
        return view('livewire.guest.pemohon.index');
    }
}
