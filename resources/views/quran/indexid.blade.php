@extends( 'index' )


@section ( 'content' )


<div class="fs-2" id="home" style="margin-top: 140px; margin-bottom: 20px">
    <div class="dark">
        <div class="text-center">
            <h2 class="about text-center" id="about">{{$response->name_translations->ar}}</h2>
        </div>
    </div>
</div>


<center>
 
    <div class="card text-center " style="width: 50%">
        <div class="card-header">
          <strong>{{$response->name}}</strong>
        </div>
        <div class="card-body">
          <p class="card-text"></p>
          <table style="text-align: left; margin: 20px ">
            <tr>
                <td>Arti Surat</td>
                <td>:</td>
                <td>{{$response->name_translations->id}}</td>
            </tr>
            <tr>
                <td>Nomor Surat</td>
                <td>:</td>
                <td>{{$response->number_of_surah}}</td>
            </tr>
            <tr>
                <td>Banyak Ayat</td>
                <td>:</td>
                <td>{{$response->number_of_ayah}}</td>
            </tr>
            <tr>
                <td>Tipe Surat</td>
                <td>:</td>
                <td>{{$response->type}}</td>
            </tr>
          </table>
        </div>
        <div class="card-footer">
          <strong style="margin-bottom: 50px"><b><u>Dengarkan Murotal</u></b> </strong>

          <figure>
            <br>

            @foreach ($response->recitations as $audio)

            <p>{{$audio->name}}</p>
            <audio src="{{$audio->audio_url}}" controls></audio>
            <br>



            @endforeach

          </figure>

        </div>
   </div>

</center>
<br>

<table class="table table-striped">
  <thead>

    <tr>
      <td colspan="4" style="background-color: rgb(95, 95, 218); color: white; text-align: center">
        <strong>Ayat</strong>
      </td>
    </tr>

    <tr style="background-color: cornflowerblue; color: white">
      <th scope="col">Ayat</th>
      <th scope="col">Lafazh</th>
      <th scope="col">Bahasa Inggris</th>
      <th scope="col">Bahasa Indonesia</th>
    </tr>

  </thead>
  <tbody>

    @foreach ($response->verses as $ayat)

    <tr>

      <td>{{$ayat->number}}</td>
      <td>{{$ayat->text}}</td>
      <td>{{$ayat->translation_en}}</td>
      <td>{{$ayat->translation_id}}</td>

    </tr>

    @endforeach

  </tbody>
</table>

<div class="card text-center ">


  <div class="card-header">
   <strong>Tafsir</strong>
  </div>

  <div class="card-body">
   <p class="card-text">
    <table style="text-align: left; margin: 20px">
      <tr>
        <td>Penerbit Tafsir</td>
        <td>:</td>
        <td>{{$response->tafsir->id->kemenag->name}}</td>
      </tr>
      <tr>
        <td>Keterangan</td>
        <td>:</td>
        <td>{{$response->tafsir->id->kemenag->source}}</td>
      </tr>
    </table>
   </p>
  </div>

  <div class="card-footer"></div>

    <div class="card-body">

      @foreach ($response->tafsir->id->kemenag->text as $key => $ayat)

      <strong>Ayat : {{$key}}</strong>
      <br>
      <p style="text-align: justify">tafsir : {{$ayat}}</p>
      <hr><hr>

      @endforeach
    </div>



</div>

<div class=" text-center" >
  <a href="/quran">
    <button style="width: 100%" class="btn btn-primary btn-lg btn-menu">Kembali</button>
</a>
</div>

<hr style="background-color: cornflowerblue">



<br>




@endsection