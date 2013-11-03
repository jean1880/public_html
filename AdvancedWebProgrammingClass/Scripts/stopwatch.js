$(document).ready(function(){
	// set base values
	var running = false;
	var msec = $('#msec').val();
	var sec = $('#sec').val();
	var min = $('#min').val();
	var hr = $('#hr').val();
	
	//disable pause
	$("#pause").attr("disabled","disabled");
	
	//start clicked beging counting either up or down based on selected option
	$('stopwatch').on("click","#start",function(){
		running = true;		
				
		// check times
		msec = $('#msec').val();
		sec = $('#sec').val();
		min = $('#min').val();
		hr = $('#hr').val();
		// activate pause button
		$("#pause").removeAttr("disabled");
		setInterval(function(){
			if(running)
			{
				//set all displays
				$('#hr').val(hr);
				$('#min').val(min);
				$('#sec').val(sec);
				$('#msec').val(msec);
				
				// if clock is left running for whole duration it can hold alert user
				if(hr == 24 && min == 60 && sec == 60 && msec == 1000)
				{
					alert("Clock has run out of time!");
					$('#stop').trigger("click");
				}
				// check which direction to increment the timer
				if($("#direction").val()=="0")
				{
					// go through the time incrementing the milliseconds and adding values to each increment of time as each threshold is passed
					msec++;
					if(msec == 1000)
					{
						msec = 0;
						sec++;
						if(sec==60)
						{
							sec=0;
							min++;
							if(min==60)
							{
								min=0;
								hr++;
							}
						}
					}
				}
				else
				{		
					// if time has reached 0 alert the user and stop the watch
					if(hr == 0 && min == 0 && sec == 0 && msec == 0)
					{
						alert("TIME!");
						$('#stop').trigger("click");
					}
					// go through the time decrementing the milliseconds and adding values to each increment of time as each threshold is passed
					if(msec == 0)
					{
						msec = 1000;						
						if(sec==0)
						{
							sec=60;							
							if(min==0)
							{
								min=60;
								hr--;
								if(hr<=0)
								{
									hr=0;
								}
							}
							min--;
						}
						sec--;
					}
					msec--;
					
				}
				
			}
		},1);
		
		//change start button into a stop button
		$(this).attr("id","stop");
		$(this).text("Stop");
	});
	
	// when pause is clicked it will stop the timer and disable itself
	$('stopwatch').on("click","#pause",function(){
		running = false;		
		$(this).attr("disabled","disabled");
		$("#stop").text("Start").attr("id","start");		
	});
	
	// When stop button is clicked reset all times and change button into a start button
	$('stopwatch').on("click","#stop",function(){
		running = false;
		msec = 0;
		sec = 0;
		min = 0;
		hr = 0;
		
		$('#hr').val(hr);
		$('#min').val(min);
		$('#sec').val(sec);
		$('#msec').val(msec);
		
		$(this).attr("id","start");
		$(this).text("Start");
		$("#pause").attr("disabled","disabled");
	});
	
	// Resets the timer to 00:00:00.000
	$('stopwatch').on("click","#reset",function(){
		msec = 0;
		sec = 0;
		min = 0;
		hr = 0;
		
		$('#hr').val(hr);
		$('#min').val(min);
		$('#sec').val(sec);
		$('#msec').val(msec);
	});
	// set clock values
	
	//set for five minutes
	$("#fiveMin").click(function(){
		$("#min").val("5");
	});
	
	// set for ten minutes
	$("#tenMin").click(function(){
		$("#min").val("10");
	});
	
	// set for fifteen minutes
	$("#fifteenMin").click(function(){
		$("#min").val("15");
	});
});