/*
 *   Copyright (c) 2023 
 *   All rights reserved.
 */
<script setup>
import { Inertia } from '@inertiajs/inertia';
import { Link } from "@inertiajs/inertia-vue3";
</script>

<template>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<a class="navbar-brand"
			href="#">
			<img class="rounded-circle m-3"
				style="width: 50px; height: 50px;"
				src="https://assets.perfectdomain.com/_domainphoto/6/3/4/a/634a84b4f85712547e41b390f39232d2.jpg"
				alt="Logo">
		</a>
		<span class="navbar-brand">
			<h1 class="display-6 fw-bold">IT Internship Log</h1>
		</span>
		<button class="navbar-toggler"
			type="button"
			data-toggle="collapse"
			data-target="#navbarNav"
			aria-controls="navbarNav"
			aria-expanded="false"
			aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse"
			id="navbarNav">
			<ul class="navbar-nav">
				<li class="nav-item">
					<Link class="nav-link"
						:href="route('activity.index')">
					<i class="fas fa-list m-1"></i> Activities
					</Link>
				</li>
				<li class="nav-item">
					<Link class="nav-link"
						:href="route('activity.create')">
					<i class="fas fa-plus m-1"></i> Activity Form
					</Link>
				</li>
				<li class="nav-item">
					<Link class="nav-link"
						:href="route('account.show', -1)">
					<i class="fas fa-user m-1"> </i> Account
					</Link>
				</li>
				<li class="nav-item">
					<Link class="nav-link"
						:href="route('help.index')">
					<i class="fas fa-question-circle m-1"></i> Help
					</Link>
				</li>
				<li class="nav-item">
					<Link class="nav-link"
						:href="route('about.index')">
					<i class="fas fa-info-circle m-1"></i>About
					</Link>
				</li>
			</ul>
		</div>
	</nav>

</template>