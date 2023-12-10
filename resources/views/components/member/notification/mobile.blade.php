<div class="lg:hidden fixed top-0 -left-[100%] z-[950] h-screen w-screen bg-white transition-all duration-300 overflow-y-auto" id="notification-mobile">
    <div class="flex flex-col">
        <section class="lg:hidden block ">
            <div class="relative flex left-[25px] top-[45px]">
                <button onclick="HandleButtonNotification()" class="ml-2">
                    <img src="{{ asset('images/icons/arrow-left.svg') }}" alt="" class="w-6">
                </button>
            </div>
            <div class="flex items-center justify-center p-5 mb-[20px]">
                <h2 class="text-[18px] font-semibold">Notifikasi</h2>
            </div>
            <div class="border border-[#E5E5E5] w-[100%]" id="notification-data">

            </div>
        </section>
    </div>
</div>

<script>
    let buttonNotification = document.getElementById("notification-mobile")

    const HandleButtonNotification = () => {

        buttonNotification.classList.toggle('-left-[100%]')
        buttonNotification.classList.toggle('left-0')

    }
</script>