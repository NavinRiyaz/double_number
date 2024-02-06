<?= view('Layouts/header') ?>
<div class="container-scroller">
    <?= view('Layouts/navigation') ?>
    <div class="container-fluid page-body-wrapper">
        <?= view('Layouts/sidebar') ?>
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="row page-title-header">
                    <div class="col-12">
                        <div class="page-header">
                            <h4 class="page-title">Double Number Merger</h4>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 grid-margin">
                        <div class="card">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-md-6">
                                        <form action="<?= base_url('user/double-number-merger') ?>" method="post">
                                            <?= csrf_field() ?>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <input type="number" class="form-control" id="old_cps_number"
                                                            name="old_cps_number" placeholder="Old CPS Number"
                                                            value="<?= set_value('old_cps_number') ?>">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <input type="number" class="form-control" id="new_cps_number"
                                                            name="new_cps_number" placeholder="New CPS Number"
                                                            value="<?= set_value('new_cps_number') ?>">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <button name="submit" type="submit"
                                                            class="btn btn-primary submit-btn btn-block">Search</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="col-md-6">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th> # </th>
                                                    <th> Name </th>
                                                    <th> Initial </th>
                                                    <th> DOB </th>
                                                    <th> Type </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $sn = 1;
                                                if (!empty($detailes)):
                                                    foreach ($detailes as $value): ?>
                                                        <tr>
                                                            <th>
                                                                <?= $sn; ?>
                                                            </th>
                                                            <td>
                                                                <?= $value['mname'] ?>
                                                            </td>
                                                            <td>
                                                                <?= $value['minitial'] ?>
                                                            </td>
                                                            <td>
                                                                <?= $value['mdob'] ?>
                                                            </td>
                                                            <td>
                                                                <label class="badge badge-warning">
                                                                    <?= $value['position'] ?>
                                                                </label>
                                                            </td>
                                                        </tr>
                                                        <?php $sn++; endforeach; endif; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="row">
                                    <form action="" method="post">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <select class="form-control" name="year">
                                                    <option selected>Select Year</option>
                                                    <option value="2005">2005</option>
                                                    <option value="2006">2006</option>
                                                    <option value="2007">2007</option>
                                                    <option value="2008">2008</option>
                                                    <option value="2009">2009</option>
                                                    <option value="2010">2010</option>
                                                    <option value="2011">2011</option>
                                                    <option value="2012">2012</option>
                                                    <option value="2013">2013</option>
                                                    <option value="2014">2014</option>
                                                    <option value="2015">2015</option>
                                                    <option value="2016">2016</option>
                                                    <option value="2017">2017</option>
                                                    <option value="2018">2018</option>
                                                    <option value="2019">2019</option>
                                                    <option value="2020">2020</option>
                                                    <option value="2021">2021</option>
                                                    <option value="2022">2022</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <select class="form-control" name="month">
                                                    <option selected>Select Month</option>
                                                    <option value="01">January</option>
                                                    <option value="02">February</option>
                                                    <option value="03">March</option>
                                                    <option value="04">April</option>
                                                    <option value="05">May</option>
                                                    <option value="06">June</option>
                                                    <option value="07">July</option>
                                                    <option value="08">August</option>
                                                    <option value="09">September</option>
                                                    <option value="10">October</option>
                                                    <option value="11">November</option>
                                                    <option value="12">December</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary submit-btn btn-block" id="search_trans">Search</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <form action="<?= base_url('user/insert-double-number') ?>" method="post">
                                <div class="card-body">
                                    <div class="dynamic_row">
                                        <div class="row">
                                            <?php if (!empty($detailes)): ?>
                                                <div class="col">
                                                    <div class="form-group">
                                                        <input type="number" class="form-control" name="old_number[]"
                                                            placeholder="Old CPS Number"
                                                            value="<?= $detailes[0]['corrected_number'] ?>" readonly>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group">
                                                        <input type="number" class="form-control" name="new_number[]"
                                                            placeholder="New CPS Number"
                                                            value="<?= $detailes[1]['corrected_number'] ?>" readonly>
                                                    </div>
                                                </div>
                                            <?php endif; ?>
                                            <div class="col">
                                                <div class="form-group">
                                                    <select class="form-control" name="year[]">
                                                        <option selected>Select Year</option>
                                                        <option value="2005">2005</option>
                                                        <option value="2006">2006</option>
                                                        <option value="2007">2007</option>
                                                        <option value="2008">2008</option>
                                                        <option value="2009">2009</option>
                                                        <option value="2010">2010</option>
                                                        <option value="2011">2011</option>
                                                        <option value="2012">2012</option>
                                                        <option value="2013">2013</option>
                                                        <option value="2014">2014</option>
                                                        <option value="2015">2015</option>
                                                        <option value="2016">2016</option>
                                                        <option value="2017">2017</option>
                                                        <option value="2018">2018</option>
                                                        <option value="2019">2019</option>
                                                        <option value="2020">2020</option>
                                                        <option value="2021">2021</option>
                                                        <option value="2022">2022</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group">
                                                    <select class="form-control" name="month[]">
                                                        <option selected>Select Month</option>
                                                        <option value="01">January</option>
                                                        <option value="02">February</option>
                                                        <option value="03">March</option>
                                                        <option value="04">April</option>
                                                        <option value="05">May</option>
                                                        <option value="06">June</option>
                                                        <option value="07">July</option>
                                                        <option value="08">August</option>
                                                        <option value="09">September</option>
                                                        <option value="10">October</option>
                                                        <option value="11">November</option>
                                                        <option value="12">December</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group">
                                                    <input type="number" class="form-control" name="amount[]"
                                                        placeholder="Amount">
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group">
                                                    <button type="button" class="btn btn-primary submit-btn btn-block"
                                                        id="add_one_more">Add One More</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="form-group">
                                        <button type="button" class="btn btn-primary submit-btn btn-block" id="double_merger">Run Double Number Merger</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <?= view('Layouts/footer_note') ?>
        </div>
    </div>
</div>
<?= view('Layouts/footer') ?>
<script>
    $(function () {
        const Toast = Swal.mixin({
            toast: true,
            position: "top-right",
            iconColor: "white",
            customClass: {
                popup: "colored-toast",
            },
            showConfirmButton: false,
            timer: 1500,
            timerProgressBar: true,
        });

        <?php if (session()->getFlashdata('success')) { ?>
            Toast.fire({
                icon: 'success',
                title: '<?php echo session()->getFlashdata('success') ?>'
            })
        <?php } ?>
        <?php if (session()->getFlashdata('error')) { ?>
            Toast.fire({
                icon: 'error',
                title: '<?php echo session()->getFlashdata('error') ?>'
            })
        <?php } ?>
        <?php if (isset($validation)) { ?>
            <?php foreach ($validation->getErrors() as $field => $error) : ?>
                Toast.fire({
                    icon: 'error',
                    title: '<?= $error ?>'
                });
            <?php endforeach; ?>
        <?php } ?>
    });
</script>
<script>
    $(document).ready(function(){
        var i=1;
        $('#add_one_more').click(function(){

            const old_n = $('#old_cps_number').val();
            const new_n = $('#new_cps_number').val();

            if(old_n == '' && new_n == ''){
                console.log('Old and New CPS Number are missing!');
                return false;
            }

            i++;
            $('.dynamic_row').append(
                '<div class="row" id="row'+i+'">' +
                '<?php if (!empty($detailes)): ?>' +
                    '<div class="col">' +
                        '<div class="form-group">' +
                            '<input type="number" class="form-control" name="old_number[]" placeholder="Old CPS Number" value="<?= $detailes[0]['corrected_number'] ?>" readonly>' +
                        '</div>' +
                    '</div>' +
                    '<div class="col">' +
                        '<div class="form-group">' +
                            '<input type="number" class="form-control" name="new_number[]" placeholder="New CPS Number" value="<?= $detailes[1]['corrected_number'] ?>" readonly>' +
                        '</div>' +
                    '</div>' +
                '<?php endif; ?>' +
                '<div class="col">' +
                    '<div class="form-group">' +
                        '<select class="form-control" name="year[]">' +
                            '<option selected>Select Year</option>'+
                            '<option value="2005">2005</option>'+
                            '<option value="2006">2006</option>'+
                            '<option value="2007">2007</option>'+
                            '<option value="2008">2008</option>'+
                            '<option value="2009">2009</option>'+
                            '<option value="2010">2010</option>'+
                            '<option value="2011">2011</option>'+
                            '<option value="2012">2012</option>'+
                            '<option value="2013">2013</option>'+
                            '<option value="2014">2014</option>'+
                            '<option value="2015">2015</option>'+
                            '<option value="2016">2016</option>'+
                            '<option value="2017">2017</option>'+
                            '<option value="2018">2018</option>'+
                            '<option value="2019">2019</option>'+
                            '<option value="2020">2020</option>'+
                            '<option value="2021">2021</option>'+
                            '<option value="2022">2022</option>'+
                            '<option value="2023">2023</option>'+
                        '</select>' +
                    '</div>' +
                '</div>' +
                '<div class="col">' +
                    '<div class="form-group">' +
                        '<select class="form-control" name="month[]">' +
                            '<option selected>Select Month</option>' +
                            '<option value="01">January</option>'+
                            '<option value="02">February</option>'+
                            '<option value="03">March</option>'+
                            '<option value="04">April</option>'+
                            '<option value="05">May</option>'+
                            '<option value="06">June</option>'+
                            '<option value="07">July</option>'+
                            '<option value="08">August</option>'+
                            '<option value="09">September</option>'+
                            '<option value="10">October</option>'+
                            '<option value="11">November</option>'+
                            '<option value="12">December</option>'+
                        '</select>' +
                    '</div>' +
                '</div>' +
                '<div class="col">' +
                    '<div class="form-group">' +
                        '<input type="number" class="form-control" name="amount[]" placeholder="Amount">' +
                    '</div>' +
                '</div>' +
                '<div class="col">' +
                    '<div class="form-group">' +
                        '<button type="button" class="btn btn-primary submit-btn btn-block btn_remove" id="'+i+'">Remove</button>' +
                    '</div>' +
                '</div>' +
            '</div>');
        });

        $(document).on('click', '.btn_remove', function(){
            var button_id = $(this).attr("id"); 
            $('#row'+button_id).remove();
        });
    });
</script>
