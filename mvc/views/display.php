<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
      table,
      th,
      td {
        border: 0.5px solid black;
      }

      .pagination {
        display: inline-block;
      }

      .pagination a {
        color: black;
        padding: 4px 8px;
        text-decoration: none;
        transition: background-color 0.3s;
        border: 1px solid #ddd;
      }

      .pagination a.active {
        background-color: #4caf50;
        color: white;
        border: 1px solid #4caf50;
      }

      .pagination a:hover:not(.active) {
        background-color: #ddd;
      }

      .footer {
        display: inline-block;
      }

      .footer {
        display: flex;
        justify-content: center;
        align-items: center;
      }

      .footer .listPage {
        width: 10%;
        display: flex;
        justify-content: center;
        align-items: center;
      }
      .footer .listPage .item {
        padding-left: 10px;
      }
      .footer .pagination {
        width: 90%;
        display: flex;
        justify-content: center;
      }
    </style>

</head>
<body> 
    <div id ="content">
        <?php require_once "./mvc/views/".$data['Folder']."/".$data["Page"].".php"?>
    </div>

    <div class="footer">
      <div class="listPage">
        <h3>Page</h3>
        <div class="item">
          <select name="page">
            <option value="1">1</option>
            <option value="2">2</option>
          </select>
        </div>
      </div>

      <div class="pagination">
        <a href="#">&laquo;</a>
        <a href="#" class="active">1</a>
        <a href="#">2</a>
        <a href="#">&raquo;</a>
      </div>
    </div>

</body>
</html>