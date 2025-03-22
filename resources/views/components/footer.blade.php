<footer
    class="2xl:max-w-8xl mx-auto max-w-5xl px-5 pb-5 pt-20 xl:max-w-7xl"
    aria-labelledby="footer-heading"
>
    <div class="flex flex-wrap items-center justify-between gap-x-6 gap-y-4">
        {{-- Left side --}}
        <div class="flex flex-col gap-6">
            {{-- Logo --}}
            <div
                x-init="
                    () => {
                        motion.inView($el, (element) => {
                            motion.animate(
                                $el,
                                {
                                    opacity: [0, 1],
                                    x: [-10, 0],
                                },
                                {
                                    duration: 0.7,
                                    ease: motion.circOut,
                                },
                            )
                        })
                    }
                "
                class="opacity-0"
            >
                <a
                    href="/"
                    class="transition duration-200 will-change-transform hover:scale-[1.02]"
                    aria-label="NativePHP homepage"
                >
                    <x-logo
                        class="h-6"
                        aria-hidden="true"
                        alt="NativePHP Logo"
                    />
                    <span class="sr-only">NativePHP homepage</span>
                </a>
            </div>
            {{-- Social links --}}
            <nav
                x-init="
                    () => {
                        motion.inView($el, (element) => {
                            motion.animate(
                                Array.from($el.children),
                                {
                                    y: [10, 0],
                                    opacity: [0, 1],
                                },
                                {
                                    duration: 0.7,
                                    ease: motion.backOut,
                                    delay: motion.stagger(0.1),
                                },
                            )
                        })
                    }
                "
                class="flex flex-wrap items-center justify-center gap-2.5 *:opacity-0"
                aria-label="Social networks"
            >
                <x-social-networks-all />
            </nav>
        </div>

        {{-- Newsletter --}}
        <a
            href="/newsletter"
            class="group relative z-0 flex items-center gap-6 overflow-hidden rounded-2xl bg-cyan-50/50 py-5 pl-6 pr-7 ring-1 ring-black/5 transition duration-300 ease-in-out hover:bg-cyan-50 hover:ring-black/10 md:max-w-lg dark:bg-gray-900/40 dark:hover:bg-gray-900"
        >
            {{-- Decorative circle --}}
            <div
                class="absolute left-3 top-1/2 -z-10 size-16 -translate-y-1/2 rounded-full bg-cyan-400/60 blur-2xl dark:block"
                aria-hidden="true"
            ></div>

            {{-- Content --}}
            <div class="flex items-center gap-5 text-sm">
                <div class="flex flex-col items-center gap-2.5">
                    {{-- Icon --}}
                    <x-icons.email-document class="size-7 shrink-0" />
                    {{-- Title --}}
                    <h2 class="font-medium">Newsletter</h2>
                </div>

                {{-- Message --}}
                <p class="leading-relaxed opacity-50">
                    Get the latest NativePHP updates and news delivered to your
                    inbox.
                </p>
            </div>

            {{-- Right arrow --}}
            <x-icons.right-arrow
                x-init="
                    () => {
                        motion.animate(
                            $el,
                            {
                                x: [0, 10],
                            },
                            {
                                repeat: Infinity,
                                repeatType: 'reverse',
                                type: 'spring',
                                stiffness: 100,
                                damping: 20
                            },
                        )
                    }
                "
                class="size-4 shrink-0"
            />
        </a>
    </div>

    {{-- Divider --}}
    <div
        class="flex items-center pb-3 pt-3"
        aria-hidden="true"
    >
        <div class="size-1.5 rotate-45 bg-gray-200/90 dark:bg-[#242734]"></div>
        <div class="h-0.5 w-full bg-gray-200/90 dark:bg-[#242734]"></div>
        <div class="size-1.5 rotate-45 bg-gray-200/90 dark:bg-[#242734]"></div>
    </div>

    {{-- Copyright --}}
    <section
        class="flex flex-wrap items-center justify-between gap-x-5 gap-y-3 text-sm text-gray-500 dark:text-gray-400/80"
        aria-label="Credits and copyright information"
    >
        <div
            x-init="
                () => {
                    motion.inView($el, (element) => {
                        motion.animate(
                            $el,
                            {
                                opacity: [0, 1],
                                x: [-10, 0],
                            },
                            {
                                duration: 0.7,
                                ease: motion.circOut,
                            },
                        )
                    })
                }
            "
            class="flex flex-wrap items-center gap-2 opacity-0"
        >
            <div class="flex gap-1">
                <div>Website designed by</div>
                <a
                    href="https://twitter.com/HassanZahirnia"
                    target="_blank"
                    class="transition duration-200 hover:text-black dark:hover:text-white"
                    aria-label="Hassan's Twitter profile"
                    rel="noopener noreferrer"
                >
                    Hassan Zahirnia
                </a>
            </div>
            <div
                class="hidden h-3 w-0.5 bg-gray-300 min-[438px]:block dark:bg-[#242734]"
            ></div>
            <div class="flex gap-1">
                <div>Logo by</div>
                <a
                    href="https://twitter.com/caneco"
                    target="_blank"
                    class="transition duration-200 hover:text-black dark:hover:text-white"
                    aria-label="Caneco's Twitter profile"
                    rel="noopener noreferrer"
                >
                    Caneco
                </a>
            </div>
        </div>
        <div
            x-init="
                () => {
                    motion.inView($el, (element) => {
                        motion.animate(
                            $el,
                            {
                                opacity: [0, 1],
                                x: [10, 0],
                            },
                            {
                                duration: 0.7,
                                ease: motion.circOut,
                            },
                        )
                    })
                }
            "
            class="opacity-0"
        >
            <span>© {{ date('Y') }} Maintained by</span>
            <a
                href="https://twitter.com/marcelpociot"
                target="_blank"
                class="transition duration-200 hover:text-black dark:hover:text-white"
                aria-label="Marcel Pociot's Twitter profile"
                rel="noopener noreferrer"
            >
                Marcel Pociot
            </a>
            <span>and</span>
            <a
                href="https://twitter.com/simonhamp"
                target="_blank"
                class="transition duration-200 hover:text-black dark:hover:text-white"
                aria-label="Simon Hamp's Twitter profile"
                rel="noopener noreferrer"
            >
                Simon Hamp
            </a>
            <span>.</span>
        </div>
    </section>
</footer>
