<div class="flex h-[80dvh] rounded-lg bg-white/50">
	<div class="w-100 bg-[url(assets/images/login/bg2.png)]"></div>
	<div class="w-full bg-white flex flex-col justify-center items-center tracking-wider">
		<h1 class="font-light text-2xl">Login Account</h1>	
		<div>
			<span class="text-sm font-light text-gray-700">
				Don't have an account?
				<a class="underline cursor-pointer" href="<?= basePath('/register'); ?>">Register</a>
			<span/>
		</div>
		<form class="mt-5 flex flex-col space-y-2" method="POST" action="<?= basePath('/login'); ?>">
			<label class="w-[400px] text-left text-sm text-gray-700">
				Email Address
			</label>
			<input type="text" name="email" class="p-2 background-transparent rounded-lg border-gray-400" required/>
			<label class="w-[400px] text-left text-sm text-gray-700">
				Password	
			</label>
			<input type="password" name="password" class="p-2 background-transparent rounded-lg border-gray-400" required/>
			<button class="btn btn-primary w-full rounded-lg mt-2">
				Login account
			</button>
		</form>
	</div>
</div>
