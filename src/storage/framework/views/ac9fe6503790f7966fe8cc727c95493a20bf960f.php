

<?php $__env->startSection('css'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/register.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('link'); ?>
<a class="header__link" href="/login">login</a>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="register-form">
	<h2 class="register-form__heading content__heading">会員登録</h2>
	<div class="register-form__inner">

		<form class="register-form__form" action="/register" method="post">
			<?php echo csrf_field(); ?>
			<div class="register-form__group">
				<label class="register-form__label" for="name">お名前</label>
				<input class="register-form__input" type="text" name="name" id="name" placeholder="例：山田 太郎">
				<p class="register-form__error-message">
					<?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
					<?php echo e($message); ?>

					<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
				</p>
			</div>
			<div class="register-form__group">
				<label class="register-form__label" for="email">メールアドレス</label>
				<input class="register-form__input" type="mail" name="email" id="email" placeholder="例：test@example.com">
				<p class="register-form__error-message">
					<?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
					<?php echo e($message); ?>

					<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
				</p>
			</div>
			<div class="register-form__group">
				<label class="register-form__label" for="password">パスワード</label>
				<input class="register-form__input" type="password" name="password" id="password" placeholder="例：coachtech1106">
				<p class="register-form__error-message">
					<?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
					<?php echo e($message); ?>

					<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
				</p>
			</div>

			<div class="register-form__group">
				<div class="form__group-title">
					<span class="form__label--item">確認用パスワード</span>
				</div>
				<div class="form__group-content">
					<div class="form__input--text">
						<input type="password" name="password_confirmation" />
					</div>
				</div>
			</div>

			<input class="register-form__btn btn" type="submit" value="会員登録">
		</form>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/resources/views/auth/register.blade.php ENDPATH**/ ?>