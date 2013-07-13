<html>
<head>
    <link href="<?php echo base_url('assets/css/bootstrap.css'); ?>" rel="stylesheet">

    <link href="<?php echo base_url('assets/css/style.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/responsive.css'); ?>" rel="stylesheet">

    <link href="<?php echo base_url('assets/css/parsley.css'); ?>" rel="stylesheet">
</head>
<body>


<div class="container">
    <div class="row-fluid">
        <div class="span12">
            <div class="span4">
                <h3>Dashboard</h3>
            </div>

            <div class="span2 offset4">
                <a href="<?php echo base_url('auth/logout');?>" class="btn btn-primary">Log Out</a>
            </div>

            <table class="table">
                <thead>
                <th>Name</th>
                <th>Email</th>
                <th>Mobile</th>
                <th>Message</th>
                <th>Source</th>
                <th>Date</th>
                </thead>

                <tbody>
                <?php foreach ($results as $result): ?>

                    <tr>
                        <td><?php if(isset($result->name)) echo $result->name; ?></td>
                        <td><?php if(isset($result->email)) echo $result->email ;?></td>
                        <td><?php if(isset($result->mobile)) echo $result->mobile; ?></td>
                        <td><?php if(isset($result->message)) echo $result->message; ?></td>
                        <td><?php if(isset($result->source)) echo $result->source; ?></td>
                        <td><?php if(isset($result->create_date)) echo $result->create_date; ?></td>
                    </tr>


                <?php endforeach; ?>
                </tbody>

            </table>
        </div>
    </div>
</div>


</body>
</html>