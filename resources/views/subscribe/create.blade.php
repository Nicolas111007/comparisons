@extends('layouts.app')

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Ajout de prix</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%;background: url(/images/home.jpg) no-repeat center center fixed;-webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover;}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script>
            function countdown(countdown_time){ // Definition of function
            if (countdown_time>-1) { // If time is different of -1
                var hours = Math.floor(countdown_time/3600); // Total hours
                
                if(hours >= 24){ // If more than 24 hours ==> 1 day or more
                    var days = Math.floor(hours/24); // Total days
                    var minus = 86400*days; // Definition of variable for further use in calculation of minutes and seconds
                    var hours = hours-(24*days); // Substraction the number of hours corresponding to days to the total of hours
                }else{
                    var days = 0; // No days
                    var minus = 0; // Idem above
                }
                
                minus = minus+3600*hours; // Recalculation of minus
                var minutes = Math.floor((countdown_time-minus)/60); // Calculation of minutes
                minus = minus + 60*minutes; // Recalculation of minus
                var seconds = countdown_time-minus; // Calculation of seconds
                minutes = ((minutes < 10) ? "0" : "") + minutes;// Adding a 0 if minutes are below 10
                seconds = ((seconds < 10) ? "0" : "") + seconds; // Adding a 0 if seconds are below 10
                
                if(countdown_time>1){
                    document.getElementById('countdown_show').innerHTML = 'Vous serez redirigé dans '+seconds+ ' secondes';
                    var remain = countdown_time-1; // Substraction of 1 second
                    setTimeout("countdown("+remain+")", 1000);// Calling function every second
                } else {
                    document.getElementById('countdown_show').innerHTML = 'Vous serez redirigé dans '+seconds+ ' seconde';
                    var remain = countdown_time-1; // Substraction of 1 second
                    setTimeout("countdown("+remain+")", 1000);// Calling function every second
                }
                
            }else{
            seconds = ((seconds < 1) ? "00" : "");
            }
        }
        jQuery(function($){
            // Countdown lauching at page loading
            countdown('15').init();
        });
        </script>
    </head>
    <body class="antialiased">
       
        @include('menu')
        @if(Session::has('success'))
            @php
                header( "refresh:15;url='/dashboard'" );
            @endphp
            <div class="flex justify-center pt-20">
                <div class="bg-green-200 rounded-lg w-0.85 p-7 mb-10">
                    <div class="alert alert-success font-bold">
                        <p>{{Session::get('success')}}</p>
                        <p class="font-bold">Nous vous remercions pour votre achat et votre confiance !</p>
                    </div>
                    <div><p class="text-center my-5" id="countdown_show"></p></div>
                </div>
            </div>
        @elseif (Auth::user()->sub_date==date("Y-m-d"))
            @php
                header( "refresh:15;url='/dashboard'" );
            @endphp
            <div class="flex justify-center pt-20">
                <div class="bg-green-200 rounded-lg w-0.85 p-7 mb-10">
                    <div class="alert alert-success font-bold">
                        <p>Vous êtes maintenant abonné pour une période d'un an !</p>
                        <p class="font-bold">Nous vous remercions pour votre achat et votre confiance !</p>
                    </div>
                    <div><p class="text-center my-5" id="countdown_show"></p></div>
                </div>
            </div>
        @endif

        @if (Auth::user()->sub_date<$oneyearago)
            <div class="flex items-center justify-center my-20">
                <div class="bg-sky-400 p-5 rounded-lg w-1/3">
                    <div class="pb-5 max-w-7xl mx-auto sm:px-6 lg:px-8 font-bold text-center underline text-white"><p>Résumé de l'abonnement</p></div>
                    <form method="post" action="{{route('subscribe.store')}}" id="subscribeForm">
                        @csrf
                        <table class="m-auto mb-10">
                            <tr>
                                <td class="px-3 text-white">Prix HTVA</td>
                                <td class="px-3 text-white"><label for="subscription">49,58 €</label></td>
                            </tr>
                            <tr>
                                <td class="px-3 text-white border border-t-0 border-l-0 border-r-0 border-b-white">TVA (21,00 %)</td>
                                <td class="px-3 text-white border border-t-0 border-l-0 border-r-0 border-b-white"><label for="subscription">10,42 €</label></td>
                                
                            </tr>
                            <tr>
                                <td class="px-3 text-white font-bold">Prix TTC</td>
                                <td class="px-3 text-white font-bold"><label for="subscription">60,00 €</label></td>
                            </tr>
                        </table>
                        <input id="payment_method" type="hidden" name="payment_method" />
                        <input id="subscriber" type="hidden" name="subscriber" value="1" required />
                        <input id="usr" type="hidden" name="usr" value="{{Auth::user()->id}}" required />
                        <input id="sub_date" type="hidden" name="sub_date" value="<?php echo date('Y-m-d'); ?>" required />
                        <div id="card-element"></div>
                        <div class="flex justify-center mb-7">
                            <button type="button" onclick="javascript:history.back(-1);" class="inline-flex items-center px-4 py-2 bg-red-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-600 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 mx-4 bg-red-800">Annuler</button>
                            <button type="submit" id="submit-button" class="inline-flex items-center px-4 py-2 bg-green-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-green-600 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 mx-4 bg-green-800">S'abonner</button>
                        </div>
                    </form>
                </div>
            </div>
        @elseif (Auth::user()->sub_date==date("Y-m-d"))
            
        @else
            @php
                header( "refresh:15;url='/dashboard'" );
            @endphp
            <div class="min-h-full flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
            <div class="max-w-lg w-full bg-green-200 p-7 rounded-lg">
                @if (Auth::user()->civility_id==1)
                    <p class="text-center mb-5">Chère Madame {{Auth::user()->name}}, vous êtes déjà abonnée !</p>
                @else
                    <p class="text-center mb-5">Cher Monsieur {{Auth::user()->name}}, vous êtes déjà abonné !</p>
                @endif
                <p class="text-center mb-5" id="countdown_show"></p>
            </div>
        @endif
        
    </body>
</html>

@section('xtra-js')
    
            
    <script src="https://js.stripe.com/v3/"></script>
    <script>
        const stripe = Stripe(" {{ env('STRIPE_KEY') }} ");
        const elements = stripe.elements();
        const cardElement  = elements.create('card', {
            classes: {
              base: 'StripeElement bg-white p-2 mt-2 mb-5 rounded-lg'
            }
        });
        cardElement.mount('#card-element');
        const cardButton = document.getElementById('submit-button');
        cardButton.addEventListener('click', async(e) => {
            e.preventDefault();
            const { paymentMethod, error } = await stripe.createPaymentMethod('card', cardElement);
            if(error) {
                
            } else {
                document.getElementById('payment_method').value = paymentMethod.id;
            }
            document.getElementById('subscribeForm').submit();
        });
    </script>
  @endsection
