<x-app-layout>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Trang Chủ') }}
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
                            <th>Mã Số Sinh Viên</th>
                            <th>Ảnh</th>
                            <th>Tên Sinh Viên</th>
                            <th>Giới Tính</th>
                            <th>Ngày Sinh</th>
                            <th>Địa Chỉ</th>
                            <th>Số CCCD</th>
                            <th>Tình Trạng</th>
                            <th>Xem</th>
                            <th>Sửa</th>
                            <th>Xóa</th>
                          </tr>
                        </thead>
                        <tbody>
                          
                            {{-- {{$sinhvien = Sinhvien::paginate(5)}} --}}

                            @foreach ($sinhvien as $sv)
                            <tr>
                              <td>{{++ $i}}</td>
                              <td>{{$sv -> MaSV}} </td>
                              <td><img class="persion" src="{{url('drawble',$sv -> FirthName)}}" alt="" style="width: 170px; height: 130px;"></td>
                              <td>{{$sv -> FirthName}} {{$sv -> LastName}}</td>
                              <td>{{$sv -> Gender}}</td>
                              <td>{{$sv -> Birth}}</td>
                              <td>{{$sv -> Address}}</td>
                              <td>{{$sv -> CitizenIdentityCard}}</td>
                              <td>{{$sv -> Status}}</td>
                              <td><a href="/detail/{{$sv -> id}}" class="btn btn-primary" role="button">Xem</a></td>
                              <form action="{{route('sinhvien.destroy', $sv-> id)}}" method="POST">

                                @hasanyrole('Admin')
                                <td><a href="{{route('sinhvien.edit', $sv-> id)}}" class="btn btn-warning" role="button">Sửa</a></td>
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
                              
                              
                            </tr>
                            @endforeach
                            
                            
                          
                          
                        </tbody>
                      </table>

                      {{$sinhvien-> onEachSide(1)-> links()}}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
