<?php
	UserSession::logout();
	flash("success", "Logout com sucesso!");
	redirect_to("/");
?>