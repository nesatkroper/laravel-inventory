<x-layout>
  <div class="app-content mt-4">
    <div class="container-fluid">
      <div class="row">
        <div class="card mb-4">
          <div class="card-header d-flex flex-column justify-content-between">
            <h3 class="card-title">Striped Full Width Table</h3>
            <a
              href="#"
              class="btn btn-success float-right mt-4"
              style="width: 200px"
              ><i class="fa fa-plus"></i>Add New Employee</a
            >
          </div>
          <div class="card-body p-0">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th style="width: 10px">#</th>
                  <th>Photo</th>
                  <th>Name</th>
                  <th>Gender</th>
                  <td>Email</td>
                  <td>Mobile</td>
                  <td>Address</td>
                  <td>POB</td>
                  <td>DOB</td>
                  <td>Status</td>
                </tr>
              </thead>
              <tbody>
                @foreach ($emp as $e)
                <tr class="align-middle">
                  <td>{{$e->id}}</td>
                  <td>
                    <img
                      class="rounded-3"
                      style="width: 80px"
                      src="{{ url('image/profile.jpg') }}"
                      alt=""
                    />
                  </td>
                  <td>{{($e->fname.' '.$e->lname)}}</td>
                  <td>{{$e->gender}}</td>
                  <td>{{$e->email}}</td>
                  <td>{{$e->mobile}}</td>
                  <td>{{$e->address}}</td>
                  <td>{{$e->pob}}</td>
                  <td>{{$e->dob}}</td>
                  <td>{{$e->status}}</td>
                  <td>
                    <a
                      href="#"
                      class="btn btn-sm rounded-3 btn-warning btn-block"
                      ><i class="fa fa-pencil" aria-hidden="true"> </i>Edit</a
                    >
                  </td>
                  <td>
                    <a
                      href="#"
                      class="btn btn-sm rounded-3 btn-danger btn-block"
                      ><i class="fa fa-trash" aria-hidden="true"></i>Delete</a
                    >
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</x-layout>
