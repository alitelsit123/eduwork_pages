    <!-- Navbar section -->
    <div class="absolute bg-transparent left-1/2 -translate-x-1/2 w-full h-[80px] top-0 z-40">
        <div class="container h-[80px] mx-auto">
        <nav class="relative flex justify-between flex-wrap mx-auto my-0 w-[90%] lg:w-[1016px] md:h-[80px] pt-[29px] pb-[22px] px-0 z-10 top-0">
        <div class="flex flex-shrink-0 items-center my-auto w-[154px] h-[31px] z-10">
                <img class="" src="./images/logo/favicon.png" alt="Eduwork Logo">
            </div>

            <button data-collapse-toggle="navbar-cta" type="button" class="navbar-toggle z-10 inline-flex p-2 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 right-0 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-cta" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-[37px] h-[37px]" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
            </button>
            <div class="hidden justify-between w-full h-full lg:flex md:w-auto md:order-1" id="navbar-cta">
                <ul class="flex flex-col md:bg-transparent bg-white rounded-md font-semibold text-[14px] fixed lg:relative left-0 right-0 min-h-screen md:min-h-0 space-y-[30px] md:space-y-0 transform translate-x-0 p-4 mb-[20px] px-[10%] md:px-0 md:flex-row mt-[20px] md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 z-50">
                <li class="mb-1">
                    <div
                        x-data="{
                            open: false,
                            toggle() {
                                if (this.open) {
                                    return this.close()
                                }
                
                                this.$refs.button.focus()
                
                                this.open = true
                            },
                            close(focusAfter) {
                                if (! this.open) return
                
                                this.open = false
                
                                focusAfter && focusAfter.focus()
                            }
                        }"
                        x-on:keydown.escape.prevent.stop="close($refs.button)"
                        x-on:focusin.window="! $refs.panel.contains($event.target) && close()"
                        x-id="['dropdown-button']"
                        class="relative text-[22px] md:text-[14px] font-[600]"
                        >
                        <!-- Button -->
                        <button
                            x-ref="button"
                            x-on:click="toggle()"
                            :aria-expanded="open"
                            :aria-controls="$id('dropdown-button')"
                            type="button"
                            class="flex gap-[5px] border-none"
                        >
                        Kelas                    
                            <!-- Heroicon: chevron-down -->
                            <svg xmlns="../images/arrow.svg" class="absolute right-0 md:relative md:right-auto md:h-5 md:w-5 h-8 w-8" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </button>
                
                        <!-- Panel -->
                        <div
                            x-ref="panel"
                            x-show="open"
                            x-transition.origin.top.left
                            x-on:click.outside="close($refs.button)"
                            :id="$id('dropdown-button')"
                            style="display: none;"
                            class="relative md:absolute left-0 mt-[25px] w-full md:w-40 rounded-md bg-white shadow-filter"
                        >
                            <a href="#" class="flex gap-2 w-full first-of-type:rounded-t-md last-of-type:rounded-b-md px-4 py-2.5 text-left text-[22px] md:text-sm hover:bg-gray-50 disabled:text-gray-500">
                                Reguler
                            </a>
                
                            <a href="#" class="flex gap-2 w-full first-of-type:rounded-t-md last-of-type:rounded-b-md px-4 py-2.5 text-left text-[22px] md:text-sm hover:bg-gray-50 disabled:text-gray-500">
                                Kelass
                            </a>

                        </div>
                    </div>
                </li>
                <li class="mb-1">
                    <div
                        x-data="{
                            open: false,
                            toggle() {
                                if (this.open) {
                                    return this.close()
                                }
                
                                this.$refs.button.focus()
                
                                this.open = true
                            },
                            close(focusAfter) {
                                if (! this.open) return
                
                                this.open = false
                
                                focusAfter && focusAfter.focus()
                            }
                        }"
                        x-on:keydown.escape.prevent.stop="close($refs.button)"
                        x-on:focusin.window="! $refs.panel.contains($event.target) && close()"
                        x-id="['dropdown-button']"
                        class="relative text-[22px] md:text-[14px] font-[600]"
                    >
                        <!-- Button -->
                        <button
                            x-ref="button"
                            x-on:click="toggle()"
                            :aria-expanded="open"
                            :aria-controls="$id('dropdown-button')"
                            type="button"
                            class="flex gap-[5px]"
                        >
                        Mentor
                            <!-- Heroicon: chevron-down -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="absolute right-0 md:relative md:right-auto  md:h-5 md:w-5 h-8 w-8"  viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </button>
                
                        <!-- Panel -->
                        <div
                            x-ref="panel"
                            x-show="open"
                            x-transition.origin.top.left
                            x-on:click.outside="close($refs.button)"
                            :id="$id('dropdown-button')"
                            style="display: none;"
                            class="relative md:absolute left-0 mt-[25px] w-full md:w-40 rounded-md bg-white shadow-filter"
                        >
                            <a href="#" class="flex gap-2 w-full first-of-type:rounded-t-md last-of-type:rounded-b-md px-4 py-2.5 text-left text-[22px] md:text-sm hover:bg-gray-50 disabled:text-gray-500">
                                Mentor
                            </a>
                
                            <a href="#" class="flex gap-2 w-full first-of-type:rounded-t-md last-of-type:rounded-b-md px-4 py-2.5 text-left text-[22px] md:text-sm hover:bg-gray-50 disabled:text-gray-500">
                                Mentorr
                            </a>

                        </div>
                    </div>
                </li>
                <li class="mb-2">
                    <div
                        x-data="{
                            open: false,
                            toggle() {
                                if (this.open) {
                                    return this.close()
                                }
                
                                this.$refs.button.focus()
                
                                this.open = true
                            },
                            close(focusAfter) {
                                if (! this.open) return
                
                                this.open = false
                
                                focusAfter && focusAfter.focus()
                            }
                        }"
                        x-on:keydown.escape.prevent.stop="close($refs.button)"
                        x-on:focusin.window="! $refs.panel.contains($event.target) && close()"
                        x-id="['dropdown-button']"
                        class="relative text-[22px] md:text-[14px] font-[600]"
                    >
                        <!-- Button -->
                        <button
                            x-ref="button"
                            x-on:click="toggle()"
                            :aria-expanded="open"
                            :aria-controls="$id('dropdown-button')"
                            type="button"
                            class="flex gap-[5px]"
                        >
                        Company                    
                            <!-- Heroicon: chevron-down -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="absolute right-0 md:relative md:right-auto md:h-5 md:w-5 h-8 w-8" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </button>
                
                        <!-- Panel -->
                        <div
                            x-ref="panel"
                            x-show="open"
                            x-transition.origin.top.left
                            x-on:click.outside="close($refs.button)"
                            :id="$id('dropdown-button')"
                            style="display: none;"
                            class="relative w-full md:absolute left-0 mt-[25px] md:w-40 rounded-md bg-white shadow-filter"
                        >
                            <a href="#" class="flex gap-2 w-full first-of-type:rounded-t-md last-of-type:rounded-b-md px-4 py-2.5 text-left text-[22px] md:text-sm hover:bg-gray-50 disabled:text-gray-500">
                                Start-up
                            </a>
                
                            <a href="#" class="flex gap-2 w-full first-of-type:rounded-t-md last-of-type:rounded-b-md px-4 py-2.5 text-left text-[22px] md:text-sm hover:bg-gray-50 disabled:text-gray-500">
                                Corporate
                            </a>

                        </div>
                    </div>
                </li>
                <li class="flex flex-col gap-[25px]">
                    <button class="md:hidden w-full text-white font-[500] bg-[#187cff] pt-[5px] pb-[8px] px-[20px] text-[22px] rounded-md mr-2 " type="button" data-modal-toggle="loginModal">Login</button>
                    <button class="md:hidden w-full text-white font-[500] bg-[#187cff] pt-[5px] pb-[8px] px-[20px] text-[22px] rounded-md" type="button" data-modal-toggle="registerModal">Register</button>
                </li>
            </ul>
            </div>
            <div class="hidden float-left w-full lg:flex md:w-auto md:order-2 h-fit">
              <button class="text-white font-[500] bg-[#187cff] text-[14px] py-[9.5px] px-[20px] rounded-md mr-2 " type="button" data-modal-toggle="loginModal">Login</button>
              <button class="text-white font-[500] bg-[#187cff] text-[14px] py-[9.5px] px-[20px] rounded-md" type="button" data-modal-toggle="registerModal">Register</button>
            </div>
        </nav>
    </div>
                    </div>
    <!-- End of Navbar section -->
