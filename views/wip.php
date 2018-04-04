
<html>
    <head>
        <title>Please enter the WIP-code</title>
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
        <style>
            button, input {
                outline: none;
                transition: background .15s ease-in;
            }
        </style>
    </head>
    <body class="leading-normal bg-grey-lighter">


        <section class="flex items-center justify-center h-screen">

            <div class="max-w-sm bg-white rounded overflow-hidden shadow-lg">

                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2">
                        Please enter your code
                    </div>
                    <p class="text-grey-darker text-base">
                        This website is shielded for perky eyes, because its
                        still a WIP. Please contact your contact person to
                        obtain a code.
                    </p>
                </div>
                <form name="wipdigitform" method="POST" action="/">
                    <div class="flex w-full p-6 pt-0">
                        <input type='text'
                            name='code'
                            placeholder="your wip-code"
                            class="flex-grow bg-blue-lightest px-3 py-2">
                        <button type='submit'
                            class="bg-blue hover:bg-blue-dark text-white font-thin py-2 px-4 rounded-r">
                            <svg class="fill-current align-middle w-6 h-6 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path class="heroicon-ui" d="M9 12A5 5 0 1 1 9 2a5 5 0 0 1 0 10zm0-2a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm8 11a1 1 0 0 1-2 0v-2a3 3 0 0 0-3-3H7a3 3 0 0 0-3 3v2a1 1 0 0 1-2 0v-2a5 5 0 0 1 5-5h5a5 5 0 0 1 5 5v2zm-1.3-10.7l1.3 1.29 3.3-3.3a1 1 0 0 1 1.4 1.42l-4 4a1 1 0 0 1-1.4 0l-2-2a1 1 0 0 1 1.4-1.42z"/></svg>

                            <span class="align-middle">Check code</span>
                        </button>
                    </div>
                </form>
                <?php
                if (isset($status) && $status === 'fout') {
                    ?>
                        <div class="flex items-center bg-blue text-white text-sm font-bold px-4 py-3" role="alert">
                            <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.432 0c1.34 0 2.01.912 2.01 1.957 0 1.305-1.164 2.512-2.679 2.512-1.269 0-2.009-.75-1.974-1.99C9.789 1.436 10.67 0 12.432 0zM8.309 20c-1.058 0-1.833-.652-1.093-3.524l1.214-5.092c.211-.814.246-1.141 0-1.141-.317 0-1.689.562-2.502 1.117l-.528-.88c2.572-2.186 5.531-3.467 6.801-3.467 1.057 0 1.233 1.273.705 3.23l-1.391 5.352c-.246.945-.141 1.271.106 1.271.317 0 1.357-.392 2.379-1.207l.6.814C12.098 19.02 9.365 20 8.309 20z"/></svg>
                            <p>Code is incorrect.</p>
                        </div>
                    <?php
                }
                ?>
            </div>
        </div>

    </body>
</html>