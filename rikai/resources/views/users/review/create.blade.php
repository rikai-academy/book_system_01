@extends('users.layouts.index')
@section('content')
@include('users.title.review.header')
<h1> {{__('message.Create_Review')}}</h1>
@include('users.title.body')
<li><span class="ion-ios-arrow-right"></span> {{__('message.Create_Review')}}</li>
@include('users.title.footer')
<div class="page-single">
	<div class="container">
		<div class="row ipad-width">
        <div class="col-md-9 col-sm-12 col-xs-12">
				<div class="form-style-1 user-pro" action="#">
					<div>
						<h3>{{__('message.Related_Book')}}</h3>
						<h2>{{__('message.Name_Book')}}</h2>
					</div>
					<br>
					<form action="#" class="user">
						<h4>{{__('message.Review_Book')}}</h4>
						<div class="row">
							<div class="col-md-12 form-it">
								<label>{{__('message.Title')}}</label>
								<input type="text" placeholder="">
							</div>
						</div>
						<div class="row">
							<div class="col-md-12 form-it">
								<label>{{__('message.Body')}}</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6 form-it">
								<label>{{__('message.Rated_books')}} </label>
                                <div class="no-star">
									<i class="ion-ios-star" data-index="0"></i>
                                    <i class="ion-ios-star" data-index="1"></i>
                                    <i class="ion-ios-star" data-index="2"></i>
                                    <i class="ion-ios-star" data-index="3"></i>
                                    <i class="ion-ios-star" data-index="4"></i>
                                    <i class="ion-ios-star" data-index="5"></i>
                                    <i class="ion-ios-star" data-index="6"></i>
                                    <i class="ion-ios-star" data-index="7"></i>
                                    <i class="ion-ios-star" data-index="8"></i>
									<i class="ion-ios-star" data-index="9"></i>
                                </div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-2">
								<input class="submit" type="submit" value="{{__('message.save')}}">
							</div>
						</div>	
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<script src="js/jquery-3.6.0.min.js"></script>
@include('users.config.ratejs')
@endsection