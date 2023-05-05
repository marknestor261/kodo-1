<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scholarship Search - kodoscholarships.com</title>
    
    <link rel="stylesheet" href={{ asset("steps/style.css") }}>
    <link rel="stylesheet" href={{ asset("steps/output.css") }}>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://sonic-ui.highereducation.com/latest/vendor.js"></script>
    <script src="https://voyager-experiences.rveducation.io/latest/voyager.bundle.js"></script>
</head>
<body>
    <!--  -->
    <main class="voyager-main flex flex-col min-h-screen bg-gray-50" role="main">
    <header class="w-full flex justify-center py-4 bg-white">
        <a href={{ url('/') }}>
            



<style type="text/css">
svg.icon-component.icon-component--logo-horizontal:hover {
fill: var(--secondary-700);
}
</style>

<img class="icon-component icon-component--logo-horizontal " src={{ asset("kodo-logo.png") }} width="232" height="36" fill="var(--secondary-600)" role="img" viewBox="0 0 232 37">



        </a>
    </header>
<div id="voyager" data-basename="/voyager/experience" class="flex-1 relative">
    <section id="voyager-blocks">
        <section>
        <section class="">
        <div data-testid="progress-bar" class="_progressBar_63yfq_1">
            <div class="_progress_63yfq_1" style="width: 83.3333%;"></div>
        </div>
    <a href="javascript:history.back()"><button data-testid="button-previous" type="button" class="_buttonPrevious_pmptr_34"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 320 512" class="_buttonChevron_pmptr_37" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M34.52 239.03L228.87 44.69c9.37-9.37 24.57-9.37 33.94 0l22.67 22.67c9.36 9.36 9.37 24.52.04 33.9L131.49 256l154.02 154.75c9.34 9.38 9.32 24.54-.04 33.9l-22.67 22.67c-9.37 9.37-24.57 9.37-33.94 0L34.52 272.97c-9.37-9.37-9.37-24.57 0-33.94z"></path></svg><span class="_buttonText_pmptr_41">Back</span></button>
    </a>
    <div class="_notAnimated_pmptr_10">
        
    <form method="POST" action="{{ route('steps.create') }}">
        @csrf 
        <span class="_headingContainer_1fpvz_1">
            <p>Nice to meet you {{ session('first_name') }}! Last question.</p>
        <h2 class="_soloHeading_1fpvz_8">Create Account</h2></span>
        <div><div data-testid="callout-field" class="_callout_1qfey_1">
            <p>This will NOT only be shared anyone, it is your <strong>authentication information.</strong></p>
        </div></div> 
            <div>
                <div class="_fieldGroup_1g3ja_1">
                    <input id="email" type="email" class="_textField_fwd9c_1"
                     name="email" placeholder="Email address" data-testid="email" :value="old('email')" required >
                </div>
            </div>
            <div>
                <div class="_fieldGroup_1g3ja_1">
                    <input id="password" type="password" class="_textField_fwd9c_1" name="password"
                    required autocomplete="new-password"
                    placeholder="Password" data-testid="password">
                </div>
            </div>
            <div>
                <div class="_fieldGroup_1g3ja_1">
                    <input id="password_confirmation" type="password" 
                    class="_textField_fwd9c_1" name="password_confirmation"  required placeholder="Confirm Password" 
                    data-testid="password_confirmation">
                </div>
            </div>
        <div class="_pageActions_pmptr_26">     
            <button type="submit" class="_buttonContinue_pmptr_46 _button_pmptr_30" data-testid="continue">
                <span>Continue</span>
            <svg width="26" height="16" viewBox="0 0 26 16" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M16.6774 0.468629C17.3023 -0.15621 18.3153 -0.15621 18.9402 0.468629L25.3402 6.86863C25.965 7.49347 25.965 8.50653 25.3402 9.13137L18.9402 15.5314C18.3153 16.1562 17.3023 16.1562 16.6774 15.5314C16.0526 14.9065 16.0526 13.8935 16.6774 13.2686L20.346 9.6H1.80879C0.925131 9.6 0.208786 8.88366 0.208786 8C0.208786 7.11634 0.925131 6.4 1.80879 6.4H20.346L16.6774 2.73137C16.0526 2.10653 16.0526 1.09347 16.6774 0.468629Z" fill="white">
            </path></svg></button>
        </div>
    </form>
    </div>
</section>
</section>
</section>
</div>

    <div class="_disclaimer_pmptr_58"><p>Your information is secure and will only be used by a school rep to provide you with more details.</p><p>By clicking the continue button:</p><ul><li>You consent and agree to the following <a href="/terms-of-use/" target="_BLANK">Terms of Use</a> and <a href="/privacy-policy/" target="_BLANK">Privacy Policy</a></li><li>You agree the selected providers may contact you via email regarding their programs.</li><li>You agree that the providers you select, may call and/or text you for marketing purposes regarding these programs at the telephone number you provided using an automated calling technology or an artificial or pre-recorded voice, even if you've registered that number on a Do-Not-Call registry.</li></ul></div><p class="_disclaimer_icov9_1"><svg width="18" height="20" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M3.024 8.8V6.4a6 6 0 0 1 12 0v2.4a2.4 2.4 0 0 1 2.4 2.4v6a2.4 2.4 0 0 1-2.4 2.4h-12a2.4 2.4 0 0 1-2.4-2.4v-6a2.4 2.4 0 0 1 2.4-2.4Zm9.6-2.4v2.4h-7.2V6.4a3.6 3.6 0 0 1 7.2 0Z" fill=" #e22944"></path></svg>We safeguard your information with 256-bit encryption, the same method employed by most banks and one of the most secure encryption solutions available.</p></div></section></section></section></div>
<footer class="flex justify-center items-center bg-primary-900 mt-4 py-5">
        <div class="flex flex-col items-center justify-center md:flex-row flex-wrap">
            <a href={{ url('/') }}>
               


        

<img class="icon-component icon-component--logo-stacked-horizontal " style="color: #fff;" src={{ asset("kodo-logo.png") }} width="36" height="36" fill="#fff" role="img" viewBox="0 0 350 105">



            </a>
            <div class="py-2 divide-x px-4 flex flex-wrap justify-center">
                                                                            <a class="px-2 text-xs text-white font-bold hover:text-white" href="#"_blank">
                            Privacy Policy
                        </a>
                                                    <a class="px-2 text-xs text-white font-bold hover:text-white" href="#" target="_blank">
                            Advertising Disclosure
                        </a>
                                                    <a class="px-2 text-xs text-white font-bold hover:text-white" href="#" target="_blank">
                            Do Not Sell My Info
                        </a>
                                                                </div>
        </div>
    </footer>
    </main>
    <script src={{ asset("steps.js") }}></script>
</body>
</html>