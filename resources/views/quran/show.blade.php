@extends('index')


@section('content')

    <div class="py-3" id="home" style="width: 1300px; margin-left:-100px">
        <div style="background-color:rgb(74, 74, 236)">
            <div class="text-center font-weight-bold">
                <h3 class="about text-center" id="about" style="color: white">DAFTAR SURAT</h3>
            </div>
        </div>
    </div>


    <table class="table table-striped" style="width: 1300px; margin-left:-100px">
        <thead style="background-color: cornflowerblue; color: white">
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Surat</th>
            <th scope="col">Nama Latin</th>
            <th scope="col">Arti</th>
            <th scope="col">Jumlah Ayat</th>
            <th scope="col">Tempat Turun</th>
            <th scope="col">Tipe</th>
            <th scope="col">Audio</th>
          </tr>
        </thead>
        <tbody>

          @foreach ($response as $quran)

          <tr>
            <th scope="row">{{ $quran->number_of_surah }}</th>
            <td>{{ $quran->name_translations->ar }}<br>
                <a href="/quran/{{ $quran->number_of_surah }}">
                    <button class="btn btn-primary btn-sm btn-menu">LIhat Surat</button>
                </a>
            </td>
            <td>{{ $quran->name }}</td>
            <td>{{ $quran->name_translations->id }}</td>
            <td>{{ $quran->number_of_ayah }} Ayat</td>
            <td class="text-align justify">{{ $quran->place }}</td>
            <td class="text-align justify">{{ $quran->type }}</td>
            <td>
                <figure>
                 <figcaption>Dengarkan Murotal</figcaption>
                 <audio src="{{ $quran->recitation}}" controls></audio>
                </figure>
            </td>
          </tr>

          @endforeach
        </tbody>
      </table>
@endsection