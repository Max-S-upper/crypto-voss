@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="assets">
            <div class="header">
                <div class="title upper">
                    <p>Assets Wallet</p>
                </div>
                <div class="periods upper"></div>
                <div class="logo lower">
                    <p>Logo</p>
                </div>
                <div class="name lower">
                    <p>Currency name</p>
                </div>
                <div class="current-price lower">
                    <p>Price</p>
                </div>
                <div class="cash-profit lower">
                    <p>Cash profit</p>
                </div>
                <div class="today-profit lower">
                    <p>Today profit</p>
                </div>
                <div class="profit lower">
                    <p>Profit</p>
                </div>
                <div class="cost lower">
                    <p>Cost</p>
                </div>
            </div>
            <div class="item">
                <div class="logo upper">
                    <div></div>
                    <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="1" y="1" width="34" height="34" rx="17" fill="#68E365" stroke="#212130" stroke-width="2"/>
                        <g clip-path="url(#clip0)">
                            <path d="M20.4125 24.85C20.225 24.4625 20.3906 23.9938 20.7781 23.8063C21.8563 23.2875 22.7688 22.4813 23.4188 21.4719C24.0844 20.4375 24.4375 19.2375 24.4375 18C24.4375 14.45 21.55 11.5625 18 11.5625C14.45 11.5625 11.5625 14.45 11.5625 18C11.5625 19.2375 11.9156 20.4375 12.5781 21.475C13.225 22.4844 14.1406 23.2906 15.2187 23.8094C15.6063 23.9969 15.7719 24.4625 15.5844 24.8531C15.3969 25.2406 14.9312 25.4063 14.5406 25.2188C13.2 24.575 12.0656 23.575 11.2625 22.3188C10.4375 21.0313 10 19.5375 10 18C10 15.8625 10.8312 13.8531 12.3438 12.3438C13.8531 10.8313 15.8625 10 18 10C20.1375 10 22.1469 10.8313 23.6563 12.3438C25.1688 13.8563 26 15.8625 26 18C26 19.5375 25.5625 21.0313 24.7344 22.3188C23.9281 23.5719 22.7938 24.575 21.4563 25.2188C21.0656 25.4031 20.6 25.2406 20.4125 24.85Z" fill="#212130"/>
                            <path d="M21.0408 18.4157C21.1939 18.5688 21.2689 18.7688 21.2689 18.9688C21.2689 19.1688 21.1939 19.3688 21.0408 19.5219L19.0751 21.4875C18.7876 21.775 18.4064 21.9313 18.0033 21.9313C17.6001 21.9313 17.2158 21.7719 16.9314 21.4875L14.9658 19.5219C14.6595 19.2157 14.6595 18.7219 14.9658 18.4157C15.272 18.1094 15.7658 18.1094 16.072 18.4157L17.2251 19.5688L17.2251 15.1282C17.2251 14.6969 17.5751 14.3469 18.0064 14.3469C18.4376 14.3469 18.7876 14.6969 18.7876 15.1282L18.7876 19.5719L19.9408 18.4188C20.2408 18.1125 20.7345 18.1125 21.0408 18.4157Z" fill="#212130"/>
                        </g>
                        <defs>
                            <clipPath id="clip0">
                                <rect width="16" height="16" fill="white" transform="matrix(-4.37114e-08 1 1 4.37114e-08 10 10)"/>
                            </clipPath>
                        </defs>
                    </svg>
                </div>
                <div class="name upper">
                    <div class="not-burger">
                        <span>Currency name</span>
                        <span>XVS/USDT</span>
                    </div>
                </div>
                <div class="entry-currency-current-price upper">
                    <div class="not-burger">
                        <span>Currency price</span>
                        <span>0.0018</span>
                    </div>
                </div>
                <div class="cash-profit upper">
                    <div class="not-burger">
                        <span>Cash profit</span>
                        <span>+25$</span>
                    </div>
                </div>
                <div class="today-profit upper">
                    <div class="not-burger">
                        <span>Today profit</span>
                        <span>+5.3%</span>
                    </div>
                </div>
                <div class="profit upper">
                    <div class="not-burger">
                        <span>Profit</span>
                        <span>+2.7%</span>
                    </div>
                </div>
                <div class="current-price upper">
                    <div class="not-burger">
                        <span>Today profit</span>
                        <span>14.49$</span>
                    </div>
                </div>
                <div class="expander upper">
                    <div class="btn green">
                        <img src="{{ asset('img/eye.svg') }}" alt="See more">
                        <img src="{{ asset('img/invisible.svg') }}" alt="See more">
                    </div>
                </div>
                <div class="date lower">
                    <div class="burger">
                        <span>Start Date</span>
                        <span>June 5, 2020</span>
                    </div>
                </div>
                <div class="entry-currency-price lower">
                    <div class="burger">
                        <span>Entry price</span>
                        <span>0.00185</span>
                    </div>
                </div>
                <div class="entry-currency-yesterday-price lower">
                    <div class="burger">
                        <span>Yesterday price</span>
                        <span>0.0019</span>
                    </div>
                </div>
                <div class="entry-price lower">
                    <div class="burger">
                        <span>Investment</span>
                        <span>14.90$</span>
                    </div>
                </div>
                <div class="goal lower">
                    <div class="burger">
                        <span>Goal</span>
                        <span>0.0548</span>
                    </div>
                </div>
                <div class="transaction-volume lower">
                    <div class="burger">
                        <span>Transaction V</span>
                        <span>8051.53564</span>
                    </div>
                </div>
                <div class="exchange lower">
                    <div class="burger">
                        <span>Exchange</span>
                        <span>Binance</span>
                    </div>
                </div>
                <div class="notice lower">
                    <div>
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 1C9.82441 1 7.69767 1.64514 5.88873 2.85384C4.07979 4.06253 2.66989 5.7805 1.83733 7.79049C1.00477 9.80047 0.786929 12.0122 1.21137 14.146C1.6358 16.2798 2.68345 18.2398 4.22183 19.7782C5.76021 21.3166 7.72022 22.3642 9.85401 22.7887C11.9878 23.2131 14.1995 22.9953 16.2095 22.1627C18.2195 21.3301 19.9375 19.9202 21.1462 18.1113C22.3549 16.3023 23 14.1756 23 12C22.9966 9.08368 21.8365 6.28778 19.7744 4.22563C17.7122 2.16347 14.9163 1.00344 12 1ZM12 21C10.22 21 8.47992 20.4722 6.99987 19.4832C5.51983 18.4943 4.36628 17.0887 3.68509 15.4442C3.0039 13.7996 2.82567 11.99 3.17294 10.2442C3.5202 8.49836 4.37737 6.89471 5.63604 5.63604C6.89472 4.37737 8.49836 3.5202 10.2442 3.17293C11.99 2.82567 13.7996 3.0039 15.4442 3.68509C17.0887 4.36627 18.4943 5.51983 19.4832 6.99987C20.4722 8.47991 21 10.22 21 12C20.9971 14.3861 20.0479 16.6736 18.3608 18.3608C16.6736 20.048 14.3861 20.9971 12 21Z" fill="white"/>
                            <path d="M12 9C11.7348 9 11.4804 9.10536 11.2929 9.29289C11.1054 9.48043 11 9.73478 11 10V17C11 17.2652 11.1054 17.5196 11.2929 17.7071C11.4804 17.8946 11.7348 18 12 18C12.2652 18 12.5196 17.8946 12.7071 17.7071C12.8947 17.5196 13 17.2652 13 17V10C13 9.73478 12.8947 9.48043 12.7071 9.29289C12.5196 9.10536 12.2652 9 12 9Z" fill="white"/>
                            <path d="M12 8C12.5523 8 13 7.55228 13 7C13 6.44771 12.5523 6 12 6C11.4477 6 11 6.44771 11 7C11 7.55228 11.4477 8 12 8Z" fill="white"/>
                        </svg>
                        <span>Lorem ipsum dolor sit amet, consectetur</span>
                    </div>
                </div>
                <div class="management lower">
                    <div class="btn orange">
                        <img src="{{ asset('img/eye.svg') }}" alt="See more">
                    </div>
                    <div class="btn red">
                        <img src="{{ asset('img/eye.svg') }}" alt="See more">
                    </div>
                </div>
            </div>
            <div class="line"></div>
            <div class="item">
                <div class="logo upper">
                    <div></div>
                    <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="1" y="1" width="34" height="34" rx="17" fill="#68E365" stroke="#212130" stroke-width="2"/>
                        <g clip-path="url(#clip0)">
                            <path d="M20.4125 24.85C20.225 24.4625 20.3906 23.9938 20.7781 23.8063C21.8563 23.2875 22.7688 22.4813 23.4188 21.4719C24.0844 20.4375 24.4375 19.2375 24.4375 18C24.4375 14.45 21.55 11.5625 18 11.5625C14.45 11.5625 11.5625 14.45 11.5625 18C11.5625 19.2375 11.9156 20.4375 12.5781 21.475C13.225 22.4844 14.1406 23.2906 15.2187 23.8094C15.6063 23.9969 15.7719 24.4625 15.5844 24.8531C15.3969 25.2406 14.9312 25.4063 14.5406 25.2188C13.2 24.575 12.0656 23.575 11.2625 22.3188C10.4375 21.0313 10 19.5375 10 18C10 15.8625 10.8312 13.8531 12.3438 12.3438C13.8531 10.8313 15.8625 10 18 10C20.1375 10 22.1469 10.8313 23.6563 12.3438C25.1688 13.8563 26 15.8625 26 18C26 19.5375 25.5625 21.0313 24.7344 22.3188C23.9281 23.5719 22.7938 24.575 21.4563 25.2188C21.0656 25.4031 20.6 25.2406 20.4125 24.85Z" fill="#212130"/>
                            <path d="M21.0408 18.4157C21.1939 18.5688 21.2689 18.7688 21.2689 18.9688C21.2689 19.1688 21.1939 19.3688 21.0408 19.5219L19.0751 21.4875C18.7876 21.775 18.4064 21.9313 18.0033 21.9313C17.6001 21.9313 17.2158 21.7719 16.9314 21.4875L14.9658 19.5219C14.6595 19.2157 14.6595 18.7219 14.9658 18.4157C15.272 18.1094 15.7658 18.1094 16.072 18.4157L17.2251 19.5688L17.2251 15.1282C17.2251 14.6969 17.5751 14.3469 18.0064 14.3469C18.4376 14.3469 18.7876 14.6969 18.7876 15.1282L18.7876 19.5719L19.9408 18.4188C20.2408 18.1125 20.7345 18.1125 21.0408 18.4157Z" fill="#212130"/>
                        </g>
                        <defs>
                            <clipPath id="clip0">
                                <rect width="16" height="16" fill="white" transform="matrix(-4.37114e-08 1 1 4.37114e-08 10 10)"/>
                            </clipPath>
                        </defs>
                    </svg>
                </div>
                <div class="name upper">
                    <p>XVS/USDT</p>
                </div>
                <div class="current-price upper">
                    <p>14.49$</p>
                </div>
                <div class="cash-profit upper">
                    <p>+25$</p>
                </div>
                <div class="today-profit upper">
                    <p>+5.3%</p>
                </div>
                <div class="profit upper">
                    <p>+2.7%</p>
                </div>
                <div class="status upper">
                    <div class="button1">
                        <p>Долгосрок</p>
                    </div>
                </div>
                <div class="expander upper right">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.00049 18L15.0005 12L9.00049 6" fill="#D3D6E4"/>
                    </svg>
                </div>
                <div class="date lower">
                    <div class="burger">
                        <span>Start Date</span>
                        <span>June 5, 2020</span>
                    </div>
                </div>
                <div class="entry-currency-price lower">
                    <div class="burger">
                        <span>Entry price</span>
                        <span>0.00185</span>
                    </div>
                </div>
                <div class="entry-currency-yesterday-price lower">
                    <div class="burger">
                        <span>Yesterday price</span>
                        <span>0.0019</span>
                    </div>
                </div>
                <div class="entry-currency-current-price lower">
                    <div class="burger">
                        <span>Current price</span>
                        <span>0.0018</span>
                    </div>
                </div>
                <div class="entry-price lower">
                    <div class="burger">
                        <span>Investment</span>
                        <span>14.90$</span>
                    </div>
                </div>
                <div class="goal lower">
                    <div class="burger">
                        <span>Goal</span>
                        <span>0.0548</span>
                    </div>
                </div>
                <div class="transaction-volume lower">
                    <div class="burger">
                        <span>Transaction V</span>
                        <span>8051.53564</span>
                    </div>
                </div>
                <div class="exchange lower">
                    <div class="burger">
                        <span>Exchange</span>
                        <span>Binance</span>
                    </div>
                </div>
                <div class="notice lower">
                    <div>
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 1C9.82441 1 7.69767 1.64514 5.88873 2.85384C4.07979 4.06253 2.66989 5.7805 1.83733 7.79049C1.00477 9.80047 0.786929 12.0122 1.21137 14.146C1.6358 16.2798 2.68345 18.2398 4.22183 19.7782C5.76021 21.3166 7.72022 22.3642 9.85401 22.7887C11.9878 23.2131 14.1995 22.9953 16.2095 22.1627C18.2195 21.3301 19.9375 19.9202 21.1462 18.1113C22.3549 16.3023 23 14.1756 23 12C22.9966 9.08368 21.8365 6.28778 19.7744 4.22563C17.7122 2.16347 14.9163 1.00344 12 1ZM12 21C10.22 21 8.47992 20.4722 6.99987 19.4832C5.51983 18.4943 4.36628 17.0887 3.68509 15.4442C3.0039 13.7996 2.82567 11.99 3.17294 10.2442C3.5202 8.49836 4.37737 6.89471 5.63604 5.63604C6.89472 4.37737 8.49836 3.5202 10.2442 3.17293C11.99 2.82567 13.7996 3.0039 15.4442 3.68509C17.0887 4.36627 18.4943 5.51983 19.4832 6.99987C20.4722 8.47991 21 10.22 21 12C20.9971 14.3861 20.0479 16.6736 18.3608 18.3608C16.6736 20.048 14.3861 20.9971 12 21Z" fill="white"/>
                            <path d="M12 9C11.7348 9 11.4804 9.10536 11.2929 9.29289C11.1054 9.48043 11 9.73478 11 10V17C11 17.2652 11.1054 17.5196 11.2929 17.7071C11.4804 17.8946 11.7348 18 12 18C12.2652 18 12.5196 17.8946 12.7071 17.7071C12.8947 17.5196 13 17.2652 13 17V10C13 9.73478 12.8947 9.48043 12.7071 9.29289C12.5196 9.10536 12.2652 9 12 9Z" fill="white"/>
                            <path d="M12 8C12.5523 8 13 7.55228 13 7C13 6.44771 12.5523 6 12 6C11.4477 6 11 6.44771 11 7C11 7.55228 11.4477 8 12 8Z" fill="white"/>
                        </svg>
                        <span>Lorem ipsum dolor sit amet, consectetur</span>
                    </div>
                </div>
            </div>
            <div class="line"></div>
            <div class="item">
                <div class="logo upper">
                    <div></div>
                    <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="1" y="1" width="34" height="34" rx="17" fill="#68E365" stroke="#212130" stroke-width="2"/>
                        <g clip-path="url(#clip0)">
                            <path d="M20.4125 24.85C20.225 24.4625 20.3906 23.9938 20.7781 23.8063C21.8563 23.2875 22.7688 22.4813 23.4188 21.4719C24.0844 20.4375 24.4375 19.2375 24.4375 18C24.4375 14.45 21.55 11.5625 18 11.5625C14.45 11.5625 11.5625 14.45 11.5625 18C11.5625 19.2375 11.9156 20.4375 12.5781 21.475C13.225 22.4844 14.1406 23.2906 15.2187 23.8094C15.6063 23.9969 15.7719 24.4625 15.5844 24.8531C15.3969 25.2406 14.9312 25.4063 14.5406 25.2188C13.2 24.575 12.0656 23.575 11.2625 22.3188C10.4375 21.0313 10 19.5375 10 18C10 15.8625 10.8312 13.8531 12.3438 12.3438C13.8531 10.8313 15.8625 10 18 10C20.1375 10 22.1469 10.8313 23.6563 12.3438C25.1688 13.8563 26 15.8625 26 18C26 19.5375 25.5625 21.0313 24.7344 22.3188C23.9281 23.5719 22.7938 24.575 21.4563 25.2188C21.0656 25.4031 20.6 25.2406 20.4125 24.85Z" fill="#212130"/>
                            <path d="M21.0408 18.4157C21.1939 18.5688 21.2689 18.7688 21.2689 18.9688C21.2689 19.1688 21.1939 19.3688 21.0408 19.5219L19.0751 21.4875C18.7876 21.775 18.4064 21.9313 18.0033 21.9313C17.6001 21.9313 17.2158 21.7719 16.9314 21.4875L14.9658 19.5219C14.6595 19.2157 14.6595 18.7219 14.9658 18.4157C15.272 18.1094 15.7658 18.1094 16.072 18.4157L17.2251 19.5688L17.2251 15.1282C17.2251 14.6969 17.5751 14.3469 18.0064 14.3469C18.4376 14.3469 18.7876 14.6969 18.7876 15.1282L18.7876 19.5719L19.9408 18.4188C20.2408 18.1125 20.7345 18.1125 21.0408 18.4157Z" fill="#212130"/>
                        </g>
                        <defs>
                            <clipPath id="clip0">
                                <rect width="16" height="16" fill="white" transform="matrix(-4.37114e-08 1 1 4.37114e-08 10 10)"/>
                            </clipPath>
                        </defs>
                    </svg>
                </div>
                <div class="name upper">
                    <p>XVS/USDT</p>
                </div>
                <div class="current-price upper">
                    <p>14.49$</p>
                </div>
                <div class="cash-profit upper">
                    <p>+25$</p>
                </div>
                <div class="today-profit upper">
                    <p>+5.3%</p>
                </div>
                <div class="profit upper">
                    <p>+2.7%</p>
                </div>
                <div class="status upper">
                    <div class="button1">
                        <p>Долгосрок</p>
                    </div>
                </div>
                <div class="expander upper right">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.00049 18L15.0005 12L9.00049 6" fill="#D3D6E4"/>
                    </svg>
                </div>
                <div class="date lower">
                    <div class="burger">
                        <span>Start Date</span>
                        <span>June 5, 2020</span>
                    </div>
                </div>
                <div class="entry-currency-price lower">
                    <div class="burger">
                        <span>Entry price</span>
                        <span>0.00185</span>
                    </div>
                </div>
                <div class="entry-currency-yesterday-price lower">
                    <div class="burger">
                        <span>Yesterday price</span>
                        <span>0.0019</span>
                    </div>
                </div>
                <div class="entry-currency-current-price lower">
                    <div class="burger">
                        <span>Current price</span>
                        <span>0.0018</span>
                    </div>
                </div>
                <div class="entry-price lower">
                    <div class="burger">
                        <span>Investment</span>
                        <span>14.90$</span>
                    </div>
                </div>
                <div class="goal lower">
                    <div class="burger">
                        <span>Goal</span>
                        <span>0.0548</span>
                    </div>
                </div>
                <div class="transaction-volume lower">
                    <div class="burger">
                        <span>Transaction V</span>
                        <span>8051.53564</span>
                    </div>
                </div>
                <div class="exchange lower">
                    <div class="burger">
                        <span>Exchange</span>
                        <span>Binance</span>
                    </div>
                </div>
                <div class="notice lower">
                    <div>
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 1C9.82441 1 7.69767 1.64514 5.88873 2.85384C4.07979 4.06253 2.66989 5.7805 1.83733 7.79049C1.00477 9.80047 0.786929 12.0122 1.21137 14.146C1.6358 16.2798 2.68345 18.2398 4.22183 19.7782C5.76021 21.3166 7.72022 22.3642 9.85401 22.7887C11.9878 23.2131 14.1995 22.9953 16.2095 22.1627C18.2195 21.3301 19.9375 19.9202 21.1462 18.1113C22.3549 16.3023 23 14.1756 23 12C22.9966 9.08368 21.8365 6.28778 19.7744 4.22563C17.7122 2.16347 14.9163 1.00344 12 1ZM12 21C10.22 21 8.47992 20.4722 6.99987 19.4832C5.51983 18.4943 4.36628 17.0887 3.68509 15.4442C3.0039 13.7996 2.82567 11.99 3.17294 10.2442C3.5202 8.49836 4.37737 6.89471 5.63604 5.63604C6.89472 4.37737 8.49836 3.5202 10.2442 3.17293C11.99 2.82567 13.7996 3.0039 15.4442 3.68509C17.0887 4.36627 18.4943 5.51983 19.4832 6.99987C20.4722 8.47991 21 10.22 21 12C20.9971 14.3861 20.0479 16.6736 18.3608 18.3608C16.6736 20.048 14.3861 20.9971 12 21Z" fill="white"/>
                            <path d="M12 9C11.7348 9 11.4804 9.10536 11.2929 9.29289C11.1054 9.48043 11 9.73478 11 10V17C11 17.2652 11.1054 17.5196 11.2929 17.7071C11.4804 17.8946 11.7348 18 12 18C12.2652 18 12.5196 17.8946 12.7071 17.7071C12.8947 17.5196 13 17.2652 13 17V10C13 9.73478 12.8947 9.48043 12.7071 9.29289C12.5196 9.10536 12.2652 9 12 9Z" fill="white"/>
                            <path d="M12 8C12.5523 8 13 7.55228 13 7C13 6.44771 12.5523 6 12 6C11.4477 6 11 6.44771 11 7C11 7.55228 11.4477 8 12 8Z" fill="white"/>
                        </svg>
                        <span>Lorem ipsum dolor sit amet, consectetur</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
