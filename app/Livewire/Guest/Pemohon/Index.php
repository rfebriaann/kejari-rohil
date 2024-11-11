<?php

namespace App\Livewire\Guest\Pemohon;

use App\Models\DataPemohon;
use App\Models\Terdakwa;
use Carbon\Carbon;
use GuzzleHttp\Client;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;

class Index extends Component
{
    // Amarangganafedira1!
    use LivewireAlert;
    use WithFileUploads;
    #[Layout('layouts.app')]

    // #[Validate('required', message: 'Nama terdakwa wajib di isi!')]
    public $nama_terdakwa = '';
    public $terdakwaId;
    public $suggestions = [];

    #[Validate('required', message: 'Nama pemohon wajib di isi!')]
    public $nama_pemohon;

    #[Validate('required', message: 'NIK wajib di isi!')]
    public $nik;

    #[Validate('required', message: 'Tempat lahir wajib di isi!')]
    public $tempat_lahir;

    #[Validate('required', message: 'Tanggal lahir wajib di isi!')]
    public $tanggal_lahir;

    #[Validate('required', message: 'Jenis Kelamin wajib di isi!')]
    public $jenis_kelamin;

    #[Validate('required', message: 'Alamat wajib di isi!')]
    public $alamat;

    #[Validate('required', message: 'Agama wajib di isi!')]
    public $agama;

    #[Validate('required', message: 'Status perkawinan wajib di isi!')]
    public $status_perkawinan;

    #[Validate('required', message: 'Pekerjaan wajib di isi!')]
    public $pekerjaan;

    #[Validate('required', message: 'Nomor HP wajib di isi!')]
    public $nomor_hp;

    #[Validate('required|mimes:pdf,doc,docx|max:2048', message: 'KTP pemohon wajib di unggah!')]
    public $ktp_pemohon;

    #[Validate('mimes:pdf,doc,docx|max:2048')]
    public $ktp_pemberi;

    #[Validate('mimes:pdf,doc,docx|max:2048')]
    public $dokumen_pendukung;

    public function searchTerdakwa()
    {
        // Ambil saran dari database berdasarkan nama yang diinput
        $this->suggestions = Terdakwa::where('nama', 'like', '%' . $this->nama_terdakwa . '%')
            ->take(5)
            ->get(['id', 'nama'])
            ->toArray();
    }

    public function selectSuggestion($id, $name)
    {
        $this->nama_terdakwa = $name; // Mengisi nama ke input
        $this->terdakwaId = $id; // Menyimpan ID terdakwa (opsional)
        $this->suggestions = []; // Mengosongkan saran setelah dipilih
    }

    public function submit()
    {
        // $this->validate(); // Validasi file

        // // // Simpan file ke direktori storage/app/documents
        // $ktp_path = $this->ktp_pemohon->store('documents');
        // $ktp_pemberi_path = $this->ktp_pemberi->store('documents');
        // $dokumen_pendukung_path = $this->dokumen_pendukung->store('documents');

        // // Simpan path ke database
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
        
        // $this->sendNotificationToFonnte();
        // Tampilkan pesan sukses
        $this->alert('success', 'Data berhasil di kirim', [
            'position' => 'center',
            'timer' => 1000,
            'toast' => true,
            'timerProgressBar' => true,
        ]);
    }

    private function sendNotificationToFonnte()
    {
        $token = "S5bJrbeynjfVvexibk2C";
        $target = "6285161762468";
        // $target = "6281266941924";

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
