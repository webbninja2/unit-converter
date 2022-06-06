<?php
    require 'vendor/autoload.php';
    use PhpUnitConversion\Unit\Volume;
    use PhpUnitConversion\Unit\Mass;

    function checkValConvertTo(){
        if( $_POST['val_name_to']   ==  'CubicMeter'){
            return new Volume\CubicMeter;
        }
        elseif( $_POST['val_name_to']   ==   'CubicCentiMeter'){
            return  new Volume\CubicCentiMeter; 
        }
    }

    $val_from   =   $_POST['val_from'];

    if( $_POST['val_name_from']     ==  'CubicMeter'){
        $convertFrom    =   new Volume\CubicMeter($val_from);
        $convertTo      =   checkValConvertTo();
        $convertFrom->to($convertTo);
        echo $convertTo->format();
    }
    elseif( $_POST['val_name_from']     ==  'CubicCentiMeter'){
        $convertFrom    =   new Volume\CubicCentiMeter($val_from);
        $convertTo      =   checkValConvertTo();
        $convertFrom->to($convertTo);
        echo $convertTo->format();
    }
?>

<form action="" method="POST">
    <input type="text" name="val_from" required>
	<select class="form-control" id="val_name_from" name="val_name_from">
	    <option selected="selected" value="">Select an Volume</option>
	    <option value="CubicMeter" selected="">cubic meter [m^3]</option>
	    <option value="CubicCentiMeter">Cubic Centi Meter</option>
	</select>
	<select class="form-control" id="val_name_to" name="val_name_to">
        <option value="CubicMeter" selected="">cubic meter [m^3]</option>
        <option value="CubicCentiMeter">Cubic Centi Meter</option>
    </select>
    <input type="submit" name="submit" value="submit">
</form>


