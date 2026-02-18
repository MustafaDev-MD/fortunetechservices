<div class="section-content-wrapper fade-anim mb-5">

    <!-- STEP 1 -->
    @if($step == 1)
    <div class="section-content">
        <div class="contact-mail">
            <p class="title">
                Fill out all the details <br>
                to the best of your<br> abilities.
            </p>
        </div>
    </div>

    <div class="contact-wrap">
        <form id="contact__form" wire:submit.prevent="nextStep">

            <div class="contact-formwrap">

                <div class="contact-formfield">
                    <!-- <input type="text" name="name" wire:model.defer="name" placeholder="Full Name*"> -->
                    <input type="text"
                        wire:model.defer="name"
                        placeholder="Full Name*"
                        class="@error('name') error @enderror">
                </div>

                <div class="contact-formfield">
                    <!-- <input type="email" name="email" wire:model.defer="email" placeholder="Email*"> -->
                    <input type="email"
                        wire:model.defer="email"
                        placeholder="Email*"
                        class="@error('email') error @enderror">

                </div>

                <div class="contact-formfield" wire:ignore>
                    <!-- <input type="text" id="dobPicker" name="dob" wire:model.defer="dob" wire:ignore autocomplete="off" placeholder="Select Date of Birth*"> -->
                    <div class="contact-formfield" wire:ignore>
                        <input type="text"
                            id="dobPicker"
                            wire:model="dob"
                            placeholder="Select Date of Birth*"
                            autocomplete="off"
                            class="@error('dob') error @enderror"
                            readonly>
                    </div>
                    <!-- <input type="text"
                        id="dobPicker"
                        autocomplete="off"
                        placeholder="Select Date of Birth*"
                        class="@error('dob') error @enderror"> -->

                </div>

                <div class="contact-formfield">
                    <!-- <input type="tel" id="phoneInput" name="phone" wire:model.defer="phone" placeholder="Phone*"> -->
                    <input type="tel"
                        id="phoneInput"
                        wire:model.defer="phone"
                        placeholder="Phone*"
                        class="@error('phone') error @enderror">

                </div>

                <div class="contact-formfield">
                    <!-- <input type="password" name="password" wire:model.defer="password" placeholder="Password*"> -->
                    <input type="password"
                        wire:model.defer="password"
                        placeholder="Password*"
                        class="@error('password') error @enderror">

                </div>

                <div class="contact-formfield">
                    <!-- <input type="password" name="password_confirmation" wire:model.defer="password_confirmation" placeholder="Repeat Password*"> -->
                    <input type="password"
                        wire:model.defer="password_confirmation"
                        placeholder="Repeat Password*"
                        class="@error('password_confirmation') error @enderror">

                </div>

                <div class="contact-formfield message">
                    <input type="text" name="mind" wire:model.defer="mind" placeholder="What's on your mind?">
                </div>

            </div>

            <div class="submit-btn">
                <button type="submit" class="rr-btn">
                    <span class="btn-wrap">
                        <span class="text-one">Next</span>
                        <span class="text-two">Next</span>
                    </span>
                </button>
            </div>
        </form>
    </div>

    @endif

    <!-- STEP 2 -->
    @if($step == 2)
    <div class="section-content">
        <div class="contact-mail">
            <p class="title">
                Fill out all the details <br>
                to the best of your<br> abilities.
            </p>
        </div>
    </div>

    <div class="contact-wrap">
        <form id="contact__form">

            <div class="contact-formwrap">
                <div class="contact-formfield">
                    <select name="stage" wire:model.defer="stage">
                        <option value="">Select Stage*</option>
                        <option value="Scaling">Scaling</option>
                        <option value="Founding">Founding</option>
                    </select>
                    @error('stage') <span class="error-message mt-5">{{ $message }}</span> @enderror
                </div>
            </div>

            <div class="submit-btn" style="display:flex; gap:15px;">
                <button type="button" wire:click="previousStep" class="rr-btn rr-btn-light">
                    <span class="btn-wrap">
                        <span class="text-one">Back</span>
                        <span class="text-two">Back</span>
                    </span>
                </button>

                <button type="button" wire:click="nextStep" class="rr-btn">
                    <span class="btn-wrap">
                        <span class="text-one">Next</span>
                        <span class="text-two">Next</span>
                    </span>
                </button>
            </div>

        </form>
    </div>
    @endif

    <!-- STEP 3 -->
    @if($step == 3)
    <div class="section-content">
        <div class="contact-mail">
            <p class="title">
                Fill out all the details <br>
                to the best of your<br> abilities.
            </p>
        </div>
    </div>

    <div class="contact-wrap">
        <form id="contact__form" wire:submit.prevent="submitStep3">

            <div class="contact-formwrap">
                @foreach($questions[$stage] as $q => $opts)
                <div class="contact-formfield">
                    <select name="answers.{{ $loop->index }}" wire:model.defer="answers.{{ $loop->index }}">
                        <option value="">{{ $q }}</option>
                        @foreach($opts as $opt => $pts)
                        <option value="{{ $pts }}">{{ $opt }}</option>
                        @endforeach
                    </select>
                    @error('answers.'.$loop->index)
                    <span class="error-message mt-5">{{ $message }}</span>
                    @enderror
                </div>
                @endforeach
            </div>

            <div class="submit-btn" style="display:flex; gap:15px;">
                <button type="button" wire:click="previousStep" class="rr-btn">
                    <span class="btn-wrap">
                        <span class="text-one">Back</span>
                        <span class="text-two">Back</span>
                    </span>
                </button>

                <button type="button" @click="validateAndStart($wire)" class="rr-btn">
                    <span class="btn-wrap">
                        <span class="text-one">Submit</span>
                        <span class="text-two">Submit</span>
                    </span>
                </button>
            </div>

            <!-- GLOBAL LOADER -->
             
            <div
                x-data="loader()"
                x-show="loading"
                x-transition.opacity
                class="assessment-loader">
                <div class="loader-card">

                    <div class="form-progress-circle">
                        <svg width="120" height="120">

                            <!-- Background -->
                            <circle
                                cx="60"
                                cy="60"
                                r="50"
                                stroke="#333"
                                stroke-width="8"
                                fill="none" />

                            <!-- Progress -->
                            <circle
                                cx="60"
                                cy="60"
                                r="50"
                                stroke="#00ffcc"
                                stroke-width="8"
                                fill="none"
                                stroke-linecap="round"
                                :stroke-dasharray="314"
                                :stroke-dashoffset="314 - (percent * 3.14)"
                                transform="rotate(-90 60 60)" />

                        </svg>

                        <div class="percentage" x-text="percent + '%'"></div>
                    </div>

                    <h4>Calculating Your Assessment</h4>
                    <p>Please wait while we analyze your responses...</p>

                </div>
            </div>

           
        </form>
    </div>
    @endif

    <!-- STEP 4 -->
    @if($step == 4)
    <div class="section-content">
        <div class="contact-mail">
            <p class="title">
                Fill out all the details <br>
                to the best of your<br> abilities.
            </p>
        </div>
    </div>

    <div class="contact-wrap">
        <div class="contact-formwrap">
            <div class="contact-formfield" style="text-align:center;">
                <h2>Friction Score: {{ $friction }}%</h2>
                <h3>{{ $status }}</h3>
                <p>{{ $message }}</p>
            </div>
        </div>
    </div>
    @endif
    <link rel="stylesheet" href="https://unpkg.com/air-datepicker@3.2.1/air-datepicker.css">
    <script src="https://unpkg.com/air-datepicker@3.2.1/air-datepicker.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.19/css/intlTelInput.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.19/js/intlTelInput.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.19/js/utils.js"></script>

    <style>
        .air-datepicker-body--day-name {
            color: #003EBA !important;
        }

        .air-datepicker-cell.-selected-,
        .air-datepicker-cell.-selected-.-current-,
        .air-datepicker-cell.-selected-.-focus- {
            color: #fff;
            background: #003EBA;
        }
    </style>


</div>


<script>
    function loader() {
    return {
        loading: false,
        percent: 0,

        async validateAndStart(livewire) {
            try {
                // Step 1: validate answers via Livewire
                const valid = await livewire.call('submitStep3');

                if (valid) {
                    // Step 2: start loader
                    this.start(livewire);
                }
            } catch (e) {
                // validation failed, errors shown automatically
            }
        },

        async start(livewire) {
            this.loading = true;
            this.percent = 0;

            const steps = [10, 25, 40, 60, 75, 90, 100]; // step stops

            for (let i = 0; i < steps.length; i++) {
                let target = steps[i];

                // smooth increment to target
                while (this.percent < target) {
                    this.percent += Math.floor(Math.random() * 3) + 1; // random small step
                    if (this.percent > target) this.percent = target;

                    // random delay between increments to create “pause” effect
                    let delay = Math.floor(Math.random() * 200) + 100; // 100ms to 300ms
                    await new Promise(r => setTimeout(r, delay));
                }

                // pause at this step before moving on
                await new Promise(r => setTimeout(r, 500 + Math.floor(Math.random() * 500))); // 0.5s to 1s pause
            }

            // finalize
            await livewire.call('finalizeStep3');
            this.loading = false;
            this.percent = 0;
        },

        init() {}
    }
}

    new AirDatepicker('#dobPicker', {
        locale: {
            days: ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'],
            daysShort: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
            daysMin: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
            months: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
            monthsShort: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
            today: 'Today',
            clear: 'Clear',
            dateFormat: 'yyyy-MM-dd',
            timeFormat: 'HH:mm',
            firstDay: 0
        },
        maxDate: new Date(),

        onSelect({
            date,
            formattedDate
        }) {
            // 1. Seedha element ko uthaein
            const input = document.querySelector('#dobPicker');
            input.value = formattedDate;

            // 2. Livewire ko batane ke liye input event trigger karein
            input.dispatchEvent(new Event('input'));

            // 3. Agar upar wala kaam na kare, toh Livewire property directly set karein
            @this.set('dob', formattedDate);
        }

    });
    // Show Toastify on Livewire validation errors
    document.addEventListener('livewire:init', () => {
        Livewire.on('toast-error', (event) => {
            Toastify({
                text: event.message,
                duration: 5000,
                gravity: "top",
                position: "right",
                close: true,
                style: {
                    background: "rgba(255,0,21,0.2)",
                    color: "#9b000d",
                    fontWeight: "600",
                    padding: "15px 40px",
                    borderRadius: "8px",
                    border: "1px solid #9b000d",
                    boxShadow: "none",
                }
            }).showToast();
        });
    });
</script>