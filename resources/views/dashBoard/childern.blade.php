@extends('./layouts.dashMain')
@section('content')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>childern</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active">childern</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">childern</h5>
             {{-- <p>Add lightweight datatables to your project with using the <a href="https://github.com/fiduswriter/Simple-DataTables" target="_blank">Simple DataTables</a> library. Just add <code>.datatable</code> class name to any table you wish to conver to a datatable. Check for <a href="https://fiduswriter.github.io/simple-datatables/demos/" target="_blank">more examples</a>.</p>--}}

              <!-- Table with stripped rows -->
              <table class="table datatable">

                <thead>
                  <tr>
                    <th>
                      <b>childName</b>
                    </th>
                    <th>birthDate</th>
                    <th>show</th>
                    <th>delete</th>
                    
                  </tr>
                </thead>

                <tbody>
                @foreach($childern as $child)
            
                  <tr>
                  <td>{{ $child->childName }}</td>
                    <td>{{ $child->birthDate }}</td>
                    <td><a href="{{ route('dashboard.showChild', $child->id)}}">show</a></td>
                    <td>
        <form action="{{ route ('dashboard.delChild')}}"  method="post">
        @csrf
    @method('delete')
            <input type="hidden" value="{{$child->id}}" name="id">
            <input type="submit" onclick="return confirm('Are you sure you want to delete?')" value="Delete">
          </form>
          </td>
                    
                  </tr>

                  @endforeach
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->

               
               @endsection