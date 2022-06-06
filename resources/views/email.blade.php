<style>
    .table-fill {
        background: white;
        border-radius:3px;
        border-collapse: collapse;
        height: auto;
        margin: auto;
        
        padding:5px;
        width: 100%;
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
        animation: float 5s infinite;
      }
       
      th {
        color:#D5DDE5;;
        background:#E20000;
        border-bottom:4px solid #9ea7af;
        border-right: 1px solid #343a45;
        font-size:23px;
        font-weight: 100;
        padding:24px;
        text-align:left;
        text-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
        vertical-align:middle;
      }
      
      th:first-child {
        border-top-left-radius:3px;
      }
       
      th:last-child {
        border-top-right-radius:3px;
        border-right:none;
      }
        
      tr {
        border-top: 1px solid #C1C3D1;
        border-bottom-: 1px solid #C1C3D1;
        color:#666B85;
        font-size:16px;
        font-weight:normal;
        text-shadow: 0 1px 1px rgba(256, 256, 256, 0.1);
      }
       
      tr:hover td {
        background:#4E5066;
        color:#FFFFFF;
        border-top: 1px solid #22262e;
      }
       
      tr:first-child {
        border-top:none;
      }
      
      tr:last-child {
        border-bottom:none;
      }
       
      tr:nth-child(odd) td {
        background:#EBEBEB;
      }
       
      tr:nth-child(odd):hover td {
        background:#4E5066;
      }
      
      tr:last-child td:first-child {
        border-bottom-left-radius:3px;
      }
       
      tr:last-child td:last-child {
        border-bottom-right-radius:3px;
      }
       
      td {
        background:#FFFFFF;
        padding:10px;
        text-align:left;
        vertical-align:middle;
        font-weight:300;
        font-size:18px;
        text-shadow: -1px -1px 1px rgba(0, 0, 0, 0.1);
        border-right: 1px solid #C1C3D1;
      }
      
      td:last-child {
        border-right: 0px;
      }
      
      th.text-left {
        text-align: left;
      }
      
      th.text-center {
        text-align: center;
      }
      
      th.text-right {
        text-align: right;
      }
      
      td.text-left {
        text-align: left;
      }
      
      td.text-center {
        text-align: center;
      }
      
      td.text-right {
        text-align: right;
      }
    </style>

    

    
        <strong>Hi,  <i> ”Horeca Moldova„ </i></strong>  You have a new request fro client 
    <br>
    <hr style="padding: 20px;"> 
    <table class="table-fill">
        <thead>
            <tr>
                <th class="text-left">Nume</th>
                <th class="text-left">Telefon</th>
                <th class="text-left">Email</th>
                <th class="text-left">Mesaj</th>
            </tr>
        </thead>
        <tbody class="table-hover">
            <tr>
            <td class="text-left">{{$data['name']}}</td>
            <td class="text-left">{{$data['phone']}}</td>
            <td class="text-left">{{$data['email']}}</td>
            <td class="text-left">{{$data['message']}}</td>
            </tr>
        </tbody>
        </table>
      

