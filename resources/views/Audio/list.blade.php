@extends('layouts.app')

@section('content')
    <h1 class="text-center text-success">{{$title}}</h1>
    <br/><br/><br/>
	{!! Form::open(['action' => 'AudiosController@list', 'method' => 'POST']) !!}
        <div class="form=group">
		<p><b>1. Select type of audio<b></p>
		<div>
		<!--<select name="contentSelected" id="contentSelected"></select>-->
		<?php //firat function
    	
						$dir = 'file:///\\PE-DC-PF-1.algoafm.co.za\iProfiler Audio'; //ftp server
						//$dir='C:\xampp\htdocs\IProfiler';
						$files = scandir($dir, 0);
						$select="<select name=\"contentSelected\" id=\"contentSelected\" class=\"selectColor\">";
						for($i = 2; $i < count($files); $i++){	
							$select .= "<option>$files[$i]</option>\n";
						}
						$select.= "</select>";
						echo "$select";
				?>
		</div>
			<br/>
		<p><b>2. Select date range below<b></p> 
			<div class="input-daterange input-group col-xs-4"  id="datepicker">
				<input type="date" placeholder="Start date" id="startDate" name="startDate" class="input-sm form-control"/>
				<span class="input-group-addon">to</span>
				<input type="date" placeholder="Start date" id="endDate" name="endDate" class="input-sm form-control"/>	
			</div>
				<br />
		<p><b>3. Select specific time range from below</b></p>
			<button type="submit" name="btnAll" value="btnAll" class="btn-xm buttonStyle">All</button><br/>
			<button type="submit" name= "btnFirstHr" value="btnFirstHr" class="btn-xm buttonStyle">12am-1am</button>
			<button type="submit" name= "btnSecondHr" value="btnSecondHr" class="btn-xm buttonStyle">1-2am</button>
			<button type="submit" name="btnThirdHr" value="btnThirdHr" class="btn-xm buttonStyle">2-3am</button>
			<button type="submit" name="btnFourthHr" value="btnFourthHr" class="btn-xm buttonStyle">3-4am</button>
			<button type="submit" name="btnFirthHr" value="btnFirthHr" class="btn-xm buttonStyle">4-5am</button>
			<button type="submit" name="btnSixthHr" value="btnSixthHr" class="btn-xm buttonStyle">5-6am</button>
			<button type="submit" name="btnSeventhHr" value="btnSeventhHr" class="btn-xm buttonStyle">6-7am</button>
			<button type="submit" name="btnEightHr" value="btnEightHr" class="btn-xm buttonStyle">7-8am</button>
			<button type="submit" name="btnNinthHr" value="btnNinthHr" class="btn-xm buttonStyle">8-9am</button>
			<button type="submit" name="btnTenthHr" value="btnTenthHr" class="btn-xm buttonStyle">9-10am</button>
			<button type="submit" name="btnEleventhHr" value="btnEleventhHr" class="btn-xm buttonStyle">10-11am</button>
			<button type="submit" name="btnTwelveHr" value="btnTwelveHr" class="btn-xm buttonStyle">11am-12pm</button><br/>
			<button type="submit" name="btnThirteenthHr" value="btnThirteenthHr" class="btn-xm buttonStyle">12-1pm</button>
			<button type="submit" name="btnFourteenHr" value="btnFourteenHr" class="btn-xm buttonStyle">1-2pm</button>
			<button type="submit" name="btnFifteenHr" value="btnFifteenHr" class="btn-xm buttonStyle">2-3pm</button>
			<button type="submit" name="btnSixteenHr" value="btnSixteenHr" class="btn-xm buttonStyle">3-4pm</button>
			<button type="submit" name="btnSeventeenHr" value="btnSeventeenHr" class="btn-xm buttonStyle">4-5pm</button>
			<button type="submit" name="btnEighteenHr" value="btnEighteenHr" class="btn-xm buttonStyle">5-6pm</button>
			<button type="submit" name="btnNineteenHr" value="btnNineteenHr" class="btn-xm buttonStyle">6-7pm</button>
			<button type="submit" name="btnTwentyHr" value="btnTwentyHr" class="btn-xm buttonStyle">7-8pm</button>
			<button type="submit" name="btnTwentyOneHr" value="btnTwentyOneHr" class="btn-xm buttonStyle">8-9pm</button>
			<button type="submit" name="btnTwentyTwoHr" value="btnTwentyTwoHr" class="btn-xm buttonStyle">9-10pm</button>
			<button type="submit" name="btnTwentyThreeHr" value="btnTwentyThreeHr" class="btn-xm buttonStyle">10-11pm</button>
			<button type="submit" name="btnTwentyFourHr" value="btnTwentyFourHr" class="btn-xm buttonStyle">11-12am</button><br/><br/>
		</div>
	{!! Form::close() !!}
@endsection
