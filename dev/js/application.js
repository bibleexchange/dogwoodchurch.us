function supportsSvg() {
  return document.implementation &&
    (
      document.implementation.hasFeature('http://www.w3.org/TR/SVG11/feature#Shape', '1.0') ||
      document.implementation.hasFeature('SVG', '1.0')
    );
}

var labels = [];
var series = [];

function parseTable() {
	var colIndex = 1;
	$('table.grades-chart tr').not(":first").each(function() {
	    // find the first td in the row
	    var value = $(this).find('td:nth-child(' + colIndex + ')').text();
	    // display the value in console
	    labels.push(value);
	}); 
	function grabSeries() {
		$("table.grades-chart tr").each(function() {
			colIndex = colIndex + 1;
			var arrayOfThisRow = [];
			
			var tableData = $('table.grades-chart tr').find('td:nth-child(' + colIndex + ')');
			
		    if (tableData.length > 0) {
		        tableData.each(function() { arrayOfThisRow.push($(this).text()); });
		        series.push(arrayOfThisRow);
		    }
		});
	}
	grabSeries();
	
}

/*function findSeries() {
	$("table.grades-chart tr").each(function() {
	    var arrayOfThisRow = [];
	    var tableData = $(this).find('td').not(":first");
	    console.log(tableData);
	    if (tableData.length > 0) {
	        tableData.each(function() { arrayOfThisRow.push($(this).text()); });
	        series.push(arrayOfThisRow);
	    }
	});
}*/


parseTable();


if (supportsSvg()) {
  var gradesChart = document.querySelector('.grades-chart');
  gradesChart.style.display = 'none'; // We don't need to show the list
  // draw the graphic...
  
 
  
  new Chartist.Bar('.ct-chart', {
	  labels: labels,
	  series: series
	}, {
	  width: 500,
	  height: 300
	}); 
}




