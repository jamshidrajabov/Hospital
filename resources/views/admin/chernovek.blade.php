<div align="center" style="padding-top: 100px">
    <h1 class="center">{{$appoints->name}} dan kelgan murojat</h1>
    <table  class="table  table-success table-striped">
      <tr>
        <th>Murojatchi ismi</th>
        <td>{{$appoints->name}}</td>
      </tr>
      <tr>
        <th>Elektron pochta</th>
        <td>{{$appoints->mail}}</td>
      </tr>
      <tr>
        <th>Uchrashuv vaqti</th>
        <td>{{$appoints->date}}</td>
      </tr>
      <tr>
        
        <th>Xabar matni</th>
        <td>
          {{$appoints->message}}
          </td>
      </tr>
      <tr>
        <th>Holati</th>
        <td>{{$appoints->status}}</td>
      </tr>
    <tr>
        <th>Amallar</th>
        <td>
   <a style="width:200px" class="btn btn-success" style="color: green; font-size:17px;" href="{{url('approved',$appoints->id)}}">Tasdiqlash</a>
   <br><br>
    <a style="width:200px" class="btn btn-danger" style="color: rgb(225, 27, 57); font-size:17px;" href="{{url('canceled',$appoints->id)}}">Rad qilish</a>
    <br><br>
    
    <a style="width:200px" class="btn btn-primary" style="color: #f1f1f3; font-size:17px;" href="{{url('emailview',$appoints->id)}}">Javob berish</a>
  
        </td>
    </tr>
    </table>
    </div>