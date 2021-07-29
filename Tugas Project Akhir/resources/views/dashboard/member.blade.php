@extends('layouts.app')

@section('content')
 <section id="main-content">
          <section class="wrapper">

            
<div class="container">
    <div class="row">
  <br>
      <div class="col-md-10">
            <div class="panel panel-default">
          <div class="panel-heading">
            <h2 class="panel-title">Dashboard</h2>
          </div>

          <div class="panel-body">
            Selamat datang di Perpustakaan Sederhana Kelompok TA TKK D.
            <table class="table">
                <tbody>
                    <tr>
                        <td class="text-muted">Buku dipinjam</td>
                        <td>
                            @if ($borrowLogs->count() == 0)
                                Tidak ada buku dipinjam
                            @endif
                            <ul>
                                @foreach ($borrowLogs as $borrowLog)
                                    <li>
                                        {!! Form::open(['url' => route('member.books.return', $borrowLog->book_id),
                                                'method'       => 'put',
                                                'class'        => 'form-inline js-confirm',
                                                'data-confirm' => "Anda yakin hendak mengembalikan " . $borrowLog->book->title . "?"] ) !!}

                                            {{ $borrowLog->book->title }}
                                            {!! Form::submit('Kembalikan', ['class'=>'btn btn-xs btn-default']) !!}

                                        {!! Form::close() !!}
                                    </li>
                                @endforeach
                            </ul>
                        </td>
                    </tr>
                </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
          </section>
      </section>

  
  @endsection
@section('scripts')
    
        });

        return false;
        });
    </script>
@endsection