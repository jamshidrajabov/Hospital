<style>
          
    table {
    width: 100%;
    border-spacing: 0;
    border-collapse: collapse;
  }
  
  table td {
    word-break: break-all;
  }
  table td,
  table th {
    border: 1px solid #dadada;
    padding: 5px;
  }
  table thead th {
    text-align: left;
  }
  table thead th:nth-child(0),
  table thead th:nth-child(1){
    width: 25%;
  }
  
  table thead th:nth-child(2){
    width: 20%;
  }
  table thead th:nth-child(3){
    width: 30%;
  }
  </style>
  <?php
  if ($appoints->status=="Rad etildi")
  {
    $status_color='rgb(247, 12, 12)';
  }

  if ($appoints->status=="Tasdiqlandi")
  {
    $status_color='rgb(91, 220, 91)';
  }

  if ($appoints->status=="Jarayonda")
  {
    $status_color='white';
  }

  ?>   
   <table  class="jadval">
    <tbody>
        <tr>
            <th style="width: 150px">Murojatchi ismi</th>
            <td>{{$appoints->name}}</td>
          </tr>
          <tr>
            <th>Elektron pochta</th>
            <td>{{$appoints->email}}</td>
          </tr>
          <tr>
            <th>Telefon raqami</th>
            <td>{{$appoints->phone}}</td>
          </tr>
          <tr>
            <th>Sana</th>
            <td>{{$appoints->date}}</td>
          </tr>
          <tr>
            <th>Xabar</th>
            <td>{{$appoints->message}}</td>
          </tr>
          <tr>
            <th>Shifokor</th>
            <td>{{$appoints->doctor}}</td>
          </tr>
          <tr>
            <th>Holati</th>
            <td style="color:{{$status_color}}">{{$appoints->status}}</td>
          </tr>
          <tr>
            <th>Amallar</th>
            <td>
              <a  style="width:200px; " class="btn btn-success" style="color: green; font-size:17px;" href="{{url('approved',$appoints->id)}}">Tasdiqlash</a>
              <br><br>
               <a  style="width:200px; " class="btn btn-danger" style="color: rgb(225, 27, 57); font-size:17px;" href="{{url('canceled',$appoints->id)}}">Rad qilish</a>
               <br><br>
                <a  style="width:200px; " class="btn btn-primary" style="color: #f1f1f3; font-size:17px;" href="{{url('emailview',$appoints->id)}}">Javob berish</a>
               
            </td>
          </tr>
          <tr>
            <th></th>
            <td></td>
          </tr>
                  
                  
    </tbody>
 </table>