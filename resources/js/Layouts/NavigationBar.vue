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
			<img class="rounded-circle"
				style="width: 40px; height: 40px;"
				src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fis3-ssl.mzstatic.com%2Fimage%2Fthumb%2FPurple69%2Fv4%2F0a%2Ff1%2F56%2F0af156bf-4229-1829-bbf5-b4512d0008ef%2Fsource%2F512x512bb.jpg&f=1&nofb=1&ipt=bbcc22f7899993b0d6ae8b1ee6f1c65219af95377ec3b126b1797857e6fda7cc&ipo=images"
				alt="Logo">
		</a>

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
					Activity Logs
					</Link>
				</li>
				<li class="nav-item">
					<Link class="nav-link"
						:href="route('activity.create')">
					Activity Form
					</Link>
				</li>
				<li class="nav-item">
					<Link class="nav-link"
						:href="route('account.index')">
					Account
					</Link>
				</li>
				<li class="nav-item">
					<Link class="nav-link"
						:href="route('help.index')">
					Help
					</Link>
				</li>
				<li class="nav-item">
					<Link class="nav-link"
						:href="route('about.index')">
					About</Link>
				</li>
			</ul>
		</div>
	</nav>

</template>