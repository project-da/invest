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
  .panel.panel-default {width: 93%;}
  a.btn.btn-info.add-new {margin-left: 78%;}
</style>
<body>
  <?php echo View::make('admin/sidebar'); ?>
  <!--main content start-->
  <section id="main-content">
    <section class="wrapper">
      <div class="row">
        <div class="col-lg-12 main-chart">
          <div class="border-head">
            <h3>ALL Policies</h3>
          </div>
          <div class="container">
            <br/><br/>
         
       
            <div class="panel panel-default">
              <div class="panel-heading">
                <h3 class="panel-title">ALL Policies</h3>
              </div>
              <div class="panel-body">
                <div class="table-responsive">
                  <?php echo csrf_field(); ?>
                  <table id="editable" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                                                    <th>ID</th>
                                                
                                                    <th>Images</th>
                                                    <th>Name</th>
                                                    <th>Investment</th>
                                                    <th>YouGive</th>
                                                    <th>YouGet</th>
                                                    <th>years</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $__currentLoopData = $list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                    <td class="serial"><?php echo e($item->id); ?></td>
                                     
                                                    <td> <span class="product"><img src="<?php echo e(asset('uploads/images/'. $item->image)); ?>"></span> </td>
                                                    <td><span class="gender"><?php echo e($item->name); ?></span></td>
                                                    <td><span class="smoking"><?php echo e($item->investmoney); ?></span></td>
                                                    <td><span class="income"><?php echo e($item->youGive); ?></span></td>
                                                    <td><span class="count"><?php echo e($item->YouGet); ?></span></td>
                                                    <td><span class="email"><?php echo e($item->years); ?></span></td>
                                             
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
  

  <script type="text/javascript">
  $(document).ready(function() {
    $.ajaxSetup({
      headers: {
        'X-CSRF-Token': $("input[name=_token]").val()
      }
    });
    $('#editable').Tabledit({
      url: '<?php echo e(route("tabledit.action")); ?>',
      dataType: "json",
      columns: {
        identifier: [0, 'id'],
        editable: [
        
          [2, 'name'],
          [3, 'investmoney'],
          [4, 'youGive'],
          [5, 'youGet'],
          [6, 'years']
        ]
      },
      restoreButton: false,
      onSuccess: function(data, textStatus, jqXHR) {
        if (data.action == 'delete') {
          $('#' + data.id).remove();

        }
      }
    });

  });
</script>
</body>
</html><?php /**PATH C:\xampp\htdocs\invest\resources\views/admin/allpolicies.blade.php ENDPATH**/ ?>