//=================================
// Panorama
//=================================
$(document).ready(function () {
	"use strict";

	$.ajax({
		url: '/getData',
		type: 'get',
		dataType: 'json',
		success: function (response) {
			alert(response.ruang);
		}
	});
	//$('#myModal').modal('show');
	var panorama = $("#panorama").ipanorama({
		theme: "ipnrm-theme-default",
		hotSpotSetup: false,
		onShare: function (e) {
			console.log("create a share dialog");
		},
		onHotSpotSetup: function (yaw, pitch, cameraYaw, cameraPitch, cameraZoom) {
			console.log("yaw: " + yaw + ", pitch: " + pitch + ", cameraYaw: " + cameraYaw + ", cameraPitch: " + cameraPitch + ", cameraZoom: " + cameraZoom);
		},
		hoverGrab: false,
		autoLoad: true,
		autoRotate: true,
		showControlsOnHover: false,
		showSceneThumbsCtrl: false,
		showSceneMenuCtrl: true,
		showSceneNextPrevCtrl: true,
		showZoomCtrl: true,
		showShareCtrl: true,
		showFullscreenCtrl: true,
		sceneNextPrevLoop: true,
		popoverHideTrigger: "manual",
		popoverShowClass: "fx-rotateIn",
		popoverHideClass: "fx-bounceOut",
		pitchLimits: false,
		sceneThumbsVertical: true,
		sceneId: "home",
		scenes: {
			home: {
				zoom: 100,
				type: "sphere", // specifies the scene type ("box", "sphere", "cylinder")
				title: "Home",
				thumb: true,
				thumbImage: "ipanorama/assets/images/home.jpg",
				image: "ipanorama/assets/images/home.jpg",
				hotSpots: [
					{
						yaw: 0,
						pitch: 0,
						sceneId: "main",
						popoverShow: true,
						popoverContent: "Go To Scene 2",
					}
				],

			},
			main: {
				zoom: 400,
				type: "sphere", // specifies the scene type ("box", "sphere", "cylinder")
				//titleHtml:true,
				titleSelector: "#title",
				//title: "Main Scene",
				yaw: 0,
				pitch: 0,
				compassNorthOffset: 0,
				thumb: true,
				thumbImage: "ipanorama/assets/images/thumb-01.jpg",
				image: "ipanorama/assets/images/ruangan.jpg",
				hotSpots: [
					{
						yaw: 0,
						pitch: 0,
						sceneId: "second",
						popoverShow: true,
						popoverPlacement: "top",
						//popoverContent: "Hello Everyone .)",
						popoverHtml: true,
						popoverSelector: "#popover",
					}
				],
			},
			second: {
				zoom: 40,
				type: "sphere", // specifies the scene type ("box", "sphere", "cylinder")
				title: "Second Scene",
				thumb: true,
				thumbImage: "ipanorama/assets/images/thumb-02.jpg",
				image: "ipanorama/assets/images/bathroom.jpg",
				hotSpots: [
					{
						yaw: 0,
						pitch: 0,
						sceneId: "main",
						popoverShow: true,
						popoverContent: "Go Back to The Main Scene",
					}
				],
			},
			third: {
				zoom: 40,
				type: "sphere", // specifies the scene type ("box", "sphere", "cylinder")
				title: "Third Scene",
				thumb: true,
				thumbImage: "ipanorama/assets/images/thumb-03.jpg",
				image: "ipanorama/assets/images/bedroom.jpg",
			},
			fourth: {
				zoom: 40,
				type: "sphere", // specifies the scene type ("box", "sphere", "cylinder")
				title: "Fourth Scene",
				thumb: true,
				thumbImage: "ipanorama/assets/images/thumb-04.jpg",
				image: "ipanorama/assets/images/entrance.jpg",
			}
		},
	});


	$("#fullscreen").click(function () {
		panorama.ipanorama("fullscreen");
	});
});
