import { Component, OnInit } from '@angular/core';

@Component({
	selector: 'app-stats',
	templateUrl: './stats.component.html',
	styleUrls: ['./stats.component.scss']
})
export class StatsComponent implements OnInit {
	
	constructor() {}

	ngOnInit(): void {
		function updateStats()
		{
			var network_info = JSON.parse(httpGet("https://explorer.morelonetwork.pl/api/networkinfo"))
			diff_element.innerHTML = network_info.data.difficulty;
			hashrate_element.innerHTML = Suffix(network_info.data.hash_rate);
			height_element.innerHTML = network_info.data.height;
		}
		function httpGet(theUrl)
		{
			var xmlHttp = new XMLHttpRequest();
			xmlHttp.open( "GET", theUrl, false )
			xmlHttp.send( null );
			return xmlHttp.responseText;
		}
		function Suffix(num)
		{
			if (num < 1000) {
				num = num.toFixed(2) + " H/S";
			} else if (num < 1000000) {
				num = (num / 1000).toFixed(2) + " kH/s"
			} else if (num < 1000000000) {
				num = (num / 1000000).toFixed(2) + " MH/s"
			} else if (num < 1000000000000) {
				num = (num / 1000000000).toFixed(2) + " GH/s"
			}
			return num
		}
		
		var diff_element = document.getElementById("difficulty");
		var hashrate_element = document.getElementById("hashrate");
		var height_element = document.getElementById("height");
		updateStats();
		setInterval(updateStats, 60000);
	}

}
