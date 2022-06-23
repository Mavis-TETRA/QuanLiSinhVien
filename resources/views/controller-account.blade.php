@hasanyrole('Admin|Manage')
<x-app-layout>
    <x-slot name="header">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Quản Lý Tài Khoản') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                  <div class="card-body">
                    @if (Session::has('thognbao'))
                      <div class="alert alert-success">
                        {{Session::get('thognbao')}}
                      </div>
                    @endif
                  </div>
                    <table class="table table-hover">
                        <thead>
                          <tr>
                            <th>STT</th>
                            
                            <th>Tên</th>
                            <th>Email</th>
                            <th>Quyền</th>
                            
                            <th>Chỉnh Sửa</th>
                            <th>Xóa</th>
                            <th>Ngày Tạo</th>
                            <th>Ngày Cập Nhật</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($user as $us)
                            <tr>
                              <td>{{++ $i}}</td>
                              
                              <td>{{$us -> name}}</td>
                              <td>{{$us -> email}}</td>
                              <td>{{$us->roles->first()->name}}</td>

                              
                              <form action="{{route('user.destroy', $us-> id)}}" method="POST">

                                @hasanyrole('Admin')
                                <td><a href="{{route('user.edit', $us-> id)}}" class="btn btn-warning" role="button">Sửa</a></td>
                                @else
                                <td></td>
                                @endhasanyrole
                                
                                @hasanyrole('Admin')
                                @csrf
                                @method('DELETE')
                                <td><button type="submit" class="btn btn-danger" style="background-color: #DC3545;">Xóa</button></td>
                                @else
                                <td></td>
                                @endhasanyrole
                              </form>
                              <td>{{$us -> created_at}}</td>
                              <td>{{$us -> updated_at}}</td>
                            </tr>
                          @endforeach
                        </tbody>
                      </table>
                      {{$user-> onEachSide(1)-> links()}}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
@else
  <p>Trang Không Tồn Tại</p>
@endhasanyrole
