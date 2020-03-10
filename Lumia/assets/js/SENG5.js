function showAdmin(){
		var adminMenu = document.getElementById("adminMenu");
		adminMenu.style["display"] = "block";
}
function showReview(){
		var reviewMenu = document.getElementById("reviewMenu");
		reviewMenu.style["display"] = "block";
}
function confirmDelete(n){
	var x = confirm("Are you sure you want to delete this submission? The action cannot be undone.");
	if(x == true){
		var url = "deletePaper.php?PaperID=" + n;
		window.location.href = url;
	}
}
function assign(n){
	var url = "assignReviewer.php?PaperID=" + n;
	window.location.href = url;
}
function showForm(n){
	document.getElementById("prsntID").value = n;
	var form = document.getElementById("reviewForm");
	form.style.display = "block";
	//console.log(document.getElementById("pID").value);
}
function hideForm(){
	var form = document.getElementById("reviewForm");
	form.style.display = "none";
}
function dismiss(n){
	var message = document.getElementById(n);
	message.style.display = "none";
}
function loadCir(){
	var buttons = document.getElementById('buttons');
	buttons.style.display = "none";
	var loading = document.getElementById('loadCir');
	loading.style.display = "inline-block";
}
function changeStatus(i,c){
	var button = document.getElementById(i);
	var status = document.getElementById("status");
	if(c == "accept"){

			button.innerHTML = "Revoke";
			button.style.background = "red";
			button.style.color = "white";
			button.classList.remove('accept');
			button.classList.add('remove');
			status.innerHTML = "Approved";

	}else{
		var r = confirm("Are you sure you want to revoke approval and deny the submission?");
		if(r){
		button.innerHTML = "Approve";
		button.style.background = "#000000";
		button.classList.remove('remove');
		button.classList.add('accept');
		status.innerHTML = "Denied";
		}
	}
}
function popBtns(){
	var buttons = document.getElementById('b')
}
