<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script src="https://markcell.github.io/jquery-tabledit/assets/js/tabledit.min.js"></script>
</head>
<style>
  .panel.panel-default {
    width: 93%;
  }
</style>

<body>
  <?php echo View::make('admin/sidebar'); ?>
  <!--main content start-->
  <section id="main-content">
    <section class="wrapper">
      <div class="row">
        <div class="col-lg-12 main-chart">
          <div class="border-head">
            <h3>Leads</h3>
          </div>
          <div class="container">
            <br />
            <br />
           
            <div class="panel panel-default">
              <div class="panel-heading">
                <h3 class="panel-title">Leads Data</h3>
              </div>
              <div class="panel-body">
                <div class="table-responsive">
                  <?php echo csrf_field(); ?>
                  <table id="editable" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Birth</th>
                        <th>Gender</th>
                        <th>Smoking</th>
                        <th>Income</th>
                        <th>Mobile Number</th>
                        <th>Email</th>
                        <th>City</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $__currentLoopData = $list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <tr>
                        <td><?php echo e($row->id); ?></td>
                        <td><?php echo e($row->name); ?></td>
                        <td><?php echo e($row->birth); ?></td>
                        <td><?php echo e($row->gender); ?></td>
                        <td><?php echo e($row->smoking); ?></td>
                        <td><?php echo e($row->income); ?></td>
                        <td><?php echo e($row->phone); ?></td>
                        <td><?php echo e($row->email); ?></td>
                        <td><?php echo e($row->city); ?></td>
                      </tr>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </section>

</body>

</html><?php /**PATH C:\xampp\htdocs\invest\resources\views/admin/leads.blade.php ENDPATH**/ ?>