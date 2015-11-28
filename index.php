
<html>

	<head>
		<link rel='stylesheet' href='style.css' />

		<script type='text/javascript' src='js/angular.min.js'></script>
		<script type='text/javascript' src='js/angular-route.min.js'></script>
		<script type='text/javascript' src='js/jquery.min.js'></script>

		<script type="text/javascript">
			function toggleSelect(id)
			{
				var e=document.getElementById(id);
				e.style.display=='none' ? e.style.display='block' : e.style.display='none';
			}
		</script>

	</head>

	<body ng-app='nameApp' ng-controller='mainCtrl'>

	<h1 align="center" style="margin:10px;color:#777">
		Baby Names Popularity
	</h1>

	<div style="width:60%;margin:auto;box-sizing:border-box;border-top:solid black 5px">
		<div ng-click="go('/yearwise')" style="cursor:pointer;font-weight:bold;background-color:rgb(113, 147, 152);padding:10px;float:left;width:50%;box-sizing:border-box;color:#fff;text-align:center">
			Yearwise Popularity
		</div>
		<div ng-click="go('/namewise')" style="cursor:pointer;font-weight:bold;background-color:rgb(214, 69, 93);;padding:10px;float:left;width:50%;box-sizing:border-box;color:#fff;text-align:center">
			Namewise Popularity
		</div>&nbsp;
	</div>

	<div style="position:relative;border-radius:10px;height:400px;border:solid black 1px;width:80%;margin:auto;padding:20px;background-color:#ddd;color:#666" ng-view>
	</div>

	<script type="text/javascript">
	angular.module("nameApp",['ngRoute'])
		.config(function($routeProvider){
			$routeProvider
				.when('/',{
					templateUrl:"views/main.html",
					controller: 'mainCtrl'
				})
				.when('/namewise',{
					templateUrl:'views/name.html'
				})
				.when('/yearwise',{
					templateUrl:'views/yearwise.html'
				});
		})

		.controller("mainCtrl",function($scope,$location){
			$scope.go=function(path){
				$location.path(path);
			}
		});


	</script>

	</body>

</html>
