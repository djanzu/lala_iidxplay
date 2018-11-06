<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>muemue</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

    </head>
    <body>
<table>
  <tr><th>ID</th><th>NAME</th><th>AGE</th></tr>
  <?php foreach($data as $val){ ?>
      <tr>
          <td><?php echo $val->mueman_id; ?></td>
          <td><?php echo $val->mueman_name; ?></td>
          <td><?php echo $val->mueman_age; ?></td>
      </tr>
      <?php } ?>
</table>
    </body>
</html>
