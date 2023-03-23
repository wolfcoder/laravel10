<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function cekObject()
    {
        $mahasiswa = new Mahasiswa();

        dump($mahasiswa);
    }

    // init mahasiswa and insert dummy data
    public function insert()
    {
        $mahasiswa = new Mahasiswa();
        $mahasiswa->nim = '01234567';
        $mahasiswa->nama = 'Bams Doe';
        $mahasiswa->tanggal_lahir = '2000-01-01';
        $mahasiswa->ipk = 3.4;
        $mahasiswa->save();

        dump($mahasiswa);
    }

    // mass assignment with create dummy data
    public function massAssignment()
    {
        $mahasiswa = Mahasiswa::create([
            'nim' => '11234567',
            'nama' => 'Safir Doe',
            'tanggal_lahir' => '2000-01-01',
            'ipk' => 3.8,
        ]);

        return "Berhasil insert data mahasiswa dengan nama {$mahasiswa->nama}";
    }

    // mass assignment2
    public function massAssignment2()
    {
        $mahasiswa1 = Mahasiswa::create([
            'nim' => '41234567',
            'nama' => 'Bamss Doe',
            'tanggal_lahir' => '2000-01-01',
            'ipk' => 3.8,
        ]);

        // insert another data
        $mahasiswa2 = Mahasiswa::create([
            'nim' => '51234567',
            'nama' => 'Namiya Doe',
            'tanggal_lahir' => '2000-01-01',
            'ipk' => 3.8,
        ]);

        // insert another data with name Ella
        $mahasiswa3 = Mahasiswa::create([
            'nim' => '61234567',
            'nama' => 'Ella Doe',
            'tanggal_lahir' => '2000-01-01',
            'ipk' => 3.8,
        ]);

        return "Berhasil insert data mahasiswa dengan nama {$mahasiswa1->nama} dan {$mahasiswa2->nama} dan {$mahasiswa3->nama}";
    }

    // update data
    public function update()
    {
        $mahasiswa = Mahasiswa::find(1);
        $mahasiswa->nama = 'Eloquent Doe';
        $mahasiswa->ipk = 4.0;
        $mahasiswa->save();
        dump($mahasiswa);

        return "Berhasil update data mahasiswa dengan nama {$mahasiswa->nama}";
    }

    // update data with where
    public function updateWhere()
    {
        $mahasiswa = Mahasiswa::where('nim', '61234567')->first();
        $mahasiswa->nama = 'Elo  Doe';
        $mahasiswa->ipk = 4.0;
        $mahasiswa->save();
        dump($mahasiswa);

        return "Berhasil update data mahasiswa dengan nama {$mahasiswa->nama}";
    }

    // update data with update()
    public function massUpdate()
    {
        Mahasiswa::where('nim', '61234567')->first()->update([
            'nama' => 'Elo Jan',
            'ipk' => 2.0,
        ]);

        return "Berhasil update data mahasiswa ";
    }

    // delete data
    public function delete()
    {
        $mahasiswa = Mahasiswa::find(1);
        $mahasiswa->delete();

        return "Berhasil delete data mahasiswa dengan nama {$mahasiswa->nama}";
    }

    // destroy
    public function destroy()
    {
        Mahasiswa::destroy(2);
//        dump($mahasiswa);

        return "Berhasil delete data  ";
    }

    // massDelete with where and delete
    public function massDelete()
    {
        $mahasiswa = Mahasiswa::where('ipk', '<', 3.8)->delete();
        dump($mahasiswa);

        return "Berhasil delete data ";
    }

    // show all mahasiswa
    public function all()
    {
        $result = Mahasiswa::all();
        dump($result);

        foreach ($result as $mahasiswa) {
            echo $mahasiswa->nama . '<br>';
            echo $mahasiswa->nim . '<br>';
            echo $mahasiswa->tanggal_lahir . '<br>';
            echo $mahasiswa->ipk . '<br>';
            echo '<hr>';
        }
    }

    // all view return view
    public function allView()
    {
        $result = Mahasiswa::all();
        return view('tampil-mahasiswa', ['mahasiswas' => $result]);
    }

    // get where
    public function getWhere()
    {
        $mahasiswas = Mahasiswa::where('ipk', '>', 3.5)
            ->orderBy('nama', 'desc')
            ->get();

        return view('tampil-mahasiswa', ['mahasiswas' => $mahasiswas]);
    }

    // get where nim
    public function testWhere()
    {
        $mahasiswa = Mahasiswa::where('nim', '01234567')->get();
        dump($mahasiswa);
    }


}
