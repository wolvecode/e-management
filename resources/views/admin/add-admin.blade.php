@extends('components.sidebar')
@section('page', 'Add-Admin')


@section('sidebar-item')
    <li>
        <a href="/admin/{{ auth()->user()->id }}/edit"
            class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-[#325AB3] text-white hover:text-[#34A853] border-l-4 border-transparent hover:border-indigo-500 pl-6 py-8">
            <span class="inline-flex justify-center items-center ml-4">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                </svg>
            </span>
            <span class="ml-2 fonts-semibold text-lg tracking-wide truncate">Profile</span>
        </a>
    </li>
    <li>
        <a href="/admin/applicant"
            class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-[#325AB3] text-white hover:text-[#34A853] border-l-4 border-transparent hover:border-indigo-500 pl-6 py-8">
            <span class="inline-flex justify-center items-center ml-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 hover:fill-[#34A853]" viewBox="0 0 29 26"
                    fill="none">
                    <path
                        d="M18.139 10.1555C19.5129 10.1555 20.6279 11.2705 20.6279 12.6444V19.3985C20.6279 21.0963 19.9535 22.7245 18.753 23.925C17.5525 25.1255 15.9243 25.8 14.2265 25.8C12.5287 25.8 10.9005 25.1255 9.7 23.925C8.4995 22.7245 7.82507 21.0963 7.82507 19.3985V12.6444C7.82507 11.2705 8.93867 10.1555 10.314 10.1555H18.139ZM18.139 12.2888H10.314C10.2197 12.2888 10.1292 12.3263 10.0625 12.393C9.99586 12.4597 9.9584 12.5501 9.9584 12.6444V19.3985C9.9584 20.5305 10.4081 21.6161 11.2085 22.4165C12.0089 23.2169 13.0945 23.6666 14.2265 23.6666C15.3585 23.6666 16.4441 23.2169 17.2445 22.4165C18.0449 21.6161 18.4946 20.5305 18.4946 19.3985V12.6444C18.4946 12.5501 18.4571 12.4597 18.3904 12.393C18.3238 12.3263 18.2333 12.2888 18.139 12.2888ZM2.48889 10.1555H7.29742C6.79566 10.7615 6.48923 11.5053 6.41849 12.2888H2.48889C2.39459 12.2888 2.30415 12.3263 2.23747 12.393C2.17079 12.4597 2.13333 12.5501 2.13333 12.6444V17.2652C2.13324 17.8026 2.25494 18.3331 2.48928 18.8168C2.72361 19.3004 3.0645 19.7247 3.48634 20.0577C3.90817 20.3907 4.39998 20.6238 4.92482 20.7394C5.44966 20.8551 5.99389 20.8503 6.51662 20.7255C6.63751 21.4423 6.85795 22.1264 7.16089 22.7621C6.31791 22.9876 5.43436 23.0162 4.57855 22.8457C3.72275 22.6752 2.91762 22.3102 2.22542 21.7789C1.53322 21.2475 0.9725 20.5641 0.586614 19.7814C0.200729 18.9987 1.7493e-05 18.1378 0 17.2652V12.6444C0 11.2705 1.11502 10.1555 2.48889 10.1555ZM21.1556 10.1555H25.9556C27.3294 10.1555 28.4444 11.2705 28.4444 12.6444V17.2666C28.4446 18.1387 28.2443 18.9991 27.859 19.7814C27.4737 20.5637 26.9137 21.247 26.2223 21.7784C25.5309 22.3099 24.7265 22.6752 23.8714 22.8463C23.0163 23.0173 22.1333 22.9895 21.2907 22.7649C21.595 22.1278 21.8155 21.4437 21.9378 20.7269C22.4599 20.8503 23.0031 20.8539 23.5268 20.7376C24.0505 20.6212 24.541 20.3878 24.9617 20.055C25.3824 19.7221 25.7224 19.2984 25.956 18.8155C26.1897 18.3326 26.3111 17.8031 26.3111 17.2666V12.6444C26.3111 12.5501 26.2736 12.4597 26.207 12.393C26.1403 12.3263 26.0499 12.2888 25.9556 12.2888H22.0345C21.9637 11.5053 21.6573 10.7615 21.1556 10.1555ZM14.2222 0.199951C15.3538 0.199951 16.4391 0.649474 17.2392 1.44963C18.0394 2.24978 18.4889 3.33503 18.4889 4.46662C18.4889 5.59821 18.0394 6.68345 17.2392 7.48361C16.4391 8.28376 15.3538 8.73328 14.2222 8.73328C13.0906 8.73328 12.0054 8.28376 11.2052 7.48361C10.4051 6.68345 9.95555 5.59821 9.95555 4.46662C9.95555 3.33503 10.4051 2.24978 11.2052 1.44963C12.0054 0.649474 13.0906 0.199951 14.2222 0.199951ZM23.4667 1.62217C24.4097 1.62217 25.314 1.99678 25.9808 2.66357C26.6476 3.33037 27.0222 4.23474 27.0222 5.17773C27.0222 6.12072 26.6476 7.02509 25.9808 7.69189C25.314 8.35868 24.4097 8.73328 23.4667 8.73328C22.5237 8.73328 21.6193 8.35868 20.9525 7.69189C20.2857 7.02509 19.9111 6.12072 19.9111 5.17773C19.9111 4.23474 20.2857 3.33037 20.9525 2.66357C21.6193 1.99678 22.5237 1.62217 23.4667 1.62217ZM4.97778 1.62217C5.92077 1.62217 6.82514 1.99678 7.49193 2.66357C8.15873 3.33037 8.53333 4.23474 8.53333 5.17773C8.53333 6.12072 8.15873 7.02509 7.49193 7.69189C6.82514 8.35868 5.92077 8.73328 4.97778 8.73328C4.03479 8.73328 3.13042 8.35868 2.46362 7.69189C1.79682 7.02509 1.42222 6.12072 1.42222 5.17773C1.42222 4.23474 1.79682 3.33037 2.46362 2.66357C3.13042 1.99678 4.03479 1.62217 4.97778 1.62217ZM14.2222 2.33328C13.6564 2.33328 13.1138 2.55805 12.7137 2.95812C12.3136 3.3582 12.0889 3.90082 12.0889 4.46662C12.0889 5.03241 12.3136 5.57504 12.7137 5.97511C13.1138 6.37519 13.6564 6.59995 14.2222 6.59995C14.788 6.59995 15.3306 6.37519 15.7307 5.97511C16.1308 5.57504 16.3556 5.03241 16.3556 4.46662C16.3556 3.90082 16.1308 3.3582 15.7307 2.95812C15.3306 2.55805 14.788 2.33328 14.2222 2.33328ZM23.4667 3.75551C23.0895 3.75551 22.7277 3.90535 22.461 4.17207C22.1943 4.43878 22.0444 4.80053 22.0444 5.17773C22.0444 5.55493 22.1943 5.91667 22.461 6.18339C22.7277 6.45011 23.0895 6.59995 23.4667 6.59995C23.8439 6.59995 24.2056 6.45011 24.4723 6.18339C24.739 5.91667 24.8889 5.55493 24.8889 5.17773C24.8889 4.80053 24.739 4.43878 24.4723 4.17207C24.2056 3.90535 23.8439 3.75551 23.4667 3.75551ZM4.97778 3.75551C4.60058 3.75551 4.23883 3.90535 3.97211 4.17207C3.7054 4.43878 3.55556 4.80053 3.55556 5.17773C3.55556 5.55493 3.7054 5.91667 3.97211 6.18339C4.23883 6.45011 4.60058 6.59995 4.97778 6.59995C5.35497 6.59995 5.71672 6.45011 5.98344 6.18339C6.25016 5.91667 6.4 5.55493 6.4 5.17773C6.4 4.80053 6.25016 4.43878 5.98344 4.17207C5.71672 3.90535 5.35497 3.75551 4.97778 3.75551Z"
                        fill="#FEFEFE" />
                </svg> </span>
            <span class="ml-2 fonts-semibold text-lg tracking-wide truncate">Applicants</span>
        </a>
    </li>
    <li>
        <a href="/admin/application"
            class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-[#325AB3] text-white hover:text-[#34A853] border-l-4 border-transparent hover:border-indigo-500 pl-6 py-8">
            <span class="inline-flex justify-center items-center ml-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 44 44" fill="none">
                    <g clip-path="url(#clip0_144_840)">
                        <path
                            d="M41.2228 20.1214L22.0003 31.6567L2.77783 20.1214C2.36088 19.8712 1.86164 19.7969 1.38992 19.9149C0.918206 20.0328 0.512657 20.3333 0.262491 20.7502C0.0123259 21.1672 -0.0619637 21.6664 0.0559654 22.1381C0.173895 22.6098 0.474382 23.0154 0.891325 23.2655L21.058 35.3655C21.3431 35.5369 21.6695 35.6274 22.0022 35.6274C22.3348 35.6274 22.6612 35.5369 22.9463 35.3655L43.113 23.2655C43.5299 23.0154 43.8304 22.6098 43.9484 22.1381C44.0663 21.6664 43.992 21.1672 43.7418 20.7502C43.4917 20.3333 43.0861 20.0328 42.6144 19.9149C42.1427 19.7969 41.6434 19.8712 41.2265 20.1214H41.2228Z"
                            fill="white" />
                        <path
                            d="M41.2228 28.4952L22.0003 40.0287L2.77782 28.4952C2.57137 28.3713 2.34255 28.2893 2.10441 28.2539C1.86627 28.2184 1.62349 28.2302 1.38992 28.2886C1.15635 28.347 0.936565 28.4508 0.74312 28.5942C0.549675 28.7375 0.386355 28.9175 0.262486 29.124C0.138617 29.3304 0.0566232 29.5593 0.0211874 29.7974C-0.0142483 30.0355 -0.00243262 30.2783 0.05596 30.5119C0.173889 30.9836 0.474377 31.3892 0.891319 31.6393L21.058 43.7394C21.3431 43.9107 21.6695 44.0012 22.0022 44.0012C22.3348 44.0012 22.6612 43.9107 22.9463 43.7394L43.113 31.6393C43.5299 31.3892 43.8304 30.9836 43.9483 30.5119C44.0663 30.0402 43.992 29.5409 43.7418 29.124C43.4917 28.707 43.0861 28.4066 42.6144 28.2886C42.1427 28.1707 41.6434 28.245 41.2265 28.4952H41.2228Z"
                            fill="white" />
                        <path
                            d="M0.889075 15.322L19.1931 26.3055C20.0406 26.8153 21.0109 27.0847 21.9999 27.0847C22.9889 27.0847 23.9593 26.8153 24.8067 26.3055L43.1107 15.322C43.3818 15.159 43.6061 14.9286 43.7618 14.6533C43.9175 14.378 43.9993 14.0671 43.9993 13.7508C43.9993 13.4345 43.9175 13.1236 43.7618 12.8483C43.6061 12.573 43.3818 12.3426 43.1107 12.1796L24.8067 1.19613C23.9591 0.686881 22.9888 0.417847 21.9999 0.417847C21.011 0.417847 20.0408 0.686881 19.1931 1.19613L0.889075 12.1796C0.618012 12.3426 0.393728 12.573 0.238023 12.8483C0.0823178 13.1236 0.000488281 13.4345 0.000488281 13.7508C0.000488281 14.0671 0.0823178 14.378 0.238023 14.6533C0.393728 14.9286 0.618012 15.159 0.889075 15.322Z"
                            fill="white" />
                    </g>
                    <defs>
                        <clipPath id="clip0_144_840">
                            <rect width="44" height="44" fill="white" />
                        </clipPath>
                    </defs>
                </svg> </span>
            <span class="ml-2 fonts-semibold text-lg tracking-wide truncate">Application</span>
        </a>
    </li>
    <li>
        <a href="/admin/reviewer"
            class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-[#325AB3] text-white hover:text-[#34A853] border-l-4 border-transparent hover:border-indigo-500 pl-6 py-8">
            <span class="inline-flex justify-center items-center ml-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 29 26" fill="none">
                    <path
                        d="M18.139 10.1555C19.5129 10.1555 20.6279 11.2705 20.6279 12.6444V19.3985C20.6279 21.0963 19.9535 22.7245 18.753 23.925C17.5525 25.1255 15.9243 25.8 14.2265 25.8C12.5287 25.8 10.9005 25.1255 9.7 23.925C8.4995 22.7245 7.82507 21.0963 7.82507 19.3985V12.6444C7.82507 11.2705 8.93867 10.1555 10.314 10.1555H18.139ZM18.139 12.2888H10.314C10.2197 12.2888 10.1292 12.3263 10.0625 12.393C9.99586 12.4597 9.9584 12.5501 9.9584 12.6444V19.3985C9.9584 20.5305 10.4081 21.6161 11.2085 22.4165C12.0089 23.2169 13.0945 23.6666 14.2265 23.6666C15.3585 23.6666 16.4441 23.2169 17.2445 22.4165C18.0449 21.6161 18.4946 20.5305 18.4946 19.3985V12.6444C18.4946 12.5501 18.4571 12.4597 18.3904 12.393C18.3238 12.3263 18.2333 12.2888 18.139 12.2888ZM2.48889 10.1555H7.29742C6.79566 10.7615 6.48923 11.5053 6.41849 12.2888H2.48889C2.39459 12.2888 2.30415 12.3263 2.23747 12.393C2.17079 12.4597 2.13333 12.5501 2.13333 12.6444V17.2652C2.13324 17.8026 2.25494 18.3331 2.48928 18.8168C2.72361 19.3004 3.0645 19.7247 3.48634 20.0577C3.90817 20.3907 4.39998 20.6238 4.92482 20.7394C5.44966 20.8551 5.99389 20.8503 6.51662 20.7255C6.63751 21.4423 6.85795 22.1264 7.16089 22.7621C6.31791 22.9876 5.43436 23.0162 4.57855 22.8457C3.72275 22.6752 2.91762 22.3102 2.22542 21.7789C1.53322 21.2475 0.9725 20.5641 0.586614 19.7814C0.200729 18.9987 1.7493e-05 18.1378 0 17.2652V12.6444C0 11.2705 1.11502 10.1555 2.48889 10.1555ZM21.1556 10.1555H25.9556C27.3294 10.1555 28.4444 11.2705 28.4444 12.6444V17.2666C28.4446 18.1387 28.2443 18.9991 27.859 19.7814C27.4737 20.5637 26.9137 21.247 26.2223 21.7784C25.5309 22.3099 24.7265 22.6752 23.8714 22.8463C23.0163 23.0173 22.1333 22.9895 21.2907 22.7649C21.595 22.1278 21.8155 21.4437 21.9378 20.7269C22.4599 20.8503 23.0031 20.8539 23.5268 20.7376C24.0505 20.6212 24.541 20.3878 24.9617 20.055C25.3824 19.7221 25.7224 19.2984 25.956 18.8155C26.1897 18.3326 26.3111 17.8031 26.3111 17.2666V12.6444C26.3111 12.5501 26.2736 12.4597 26.207 12.393C26.1403 12.3263 26.0499 12.2888 25.9556 12.2888H22.0345C21.9637 11.5053 21.6573 10.7615 21.1556 10.1555ZM14.2222 0.199951C15.3538 0.199951 16.4391 0.649474 17.2392 1.44963C18.0394 2.24978 18.4889 3.33503 18.4889 4.46662C18.4889 5.59821 18.0394 6.68345 17.2392 7.48361C16.4391 8.28376 15.3538 8.73328 14.2222 8.73328C13.0906 8.73328 12.0054 8.28376 11.2052 7.48361C10.4051 6.68345 9.95555 5.59821 9.95555 4.46662C9.95555 3.33503 10.4051 2.24978 11.2052 1.44963C12.0054 0.649474 13.0906 0.199951 14.2222 0.199951ZM23.4667 1.62217C24.4097 1.62217 25.314 1.99678 25.9808 2.66357C26.6476 3.33037 27.0222 4.23474 27.0222 5.17773C27.0222 6.12072 26.6476 7.02509 25.9808 7.69189C25.314 8.35868 24.4097 8.73328 23.4667 8.73328C22.5237 8.73328 21.6193 8.35868 20.9525 7.69189C20.2857 7.02509 19.9111 6.12072 19.9111 5.17773C19.9111 4.23474 20.2857 3.33037 20.9525 2.66357C21.6193 1.99678 22.5237 1.62217 23.4667 1.62217ZM4.97778 1.62217C5.92077 1.62217 6.82514 1.99678 7.49193 2.66357C8.15873 3.33037 8.53333 4.23474 8.53333 5.17773C8.53333 6.12072 8.15873 7.02509 7.49193 7.69189C6.82514 8.35868 5.92077 8.73328 4.97778 8.73328C4.03479 8.73328 3.13042 8.35868 2.46362 7.69189C1.79682 7.02509 1.42222 6.12072 1.42222 5.17773C1.42222 4.23474 1.79682 3.33037 2.46362 2.66357C3.13042 1.99678 4.03479 1.62217 4.97778 1.62217ZM14.2222 2.33328C13.6564 2.33328 13.1138 2.55805 12.7137 2.95812C12.3136 3.3582 12.0889 3.90082 12.0889 4.46662C12.0889 5.03241 12.3136 5.57504 12.7137 5.97511C13.1138 6.37519 13.6564 6.59995 14.2222 6.59995C14.788 6.59995 15.3306 6.37519 15.7307 5.97511C16.1308 5.57504 16.3556 5.03241 16.3556 4.46662C16.3556 3.90082 16.1308 3.3582 15.7307 2.95812C15.3306 2.55805 14.788 2.33328 14.2222 2.33328ZM23.4667 3.75551C23.0895 3.75551 22.7277 3.90535 22.461 4.17207C22.1943 4.43878 22.0444 4.80053 22.0444 5.17773C22.0444 5.55493 22.1943 5.91667 22.461 6.18339C22.7277 6.45011 23.0895 6.59995 23.4667 6.59995C23.8439 6.59995 24.2056 6.45011 24.4723 6.18339C24.739 5.91667 24.8889 5.55493 24.8889 5.17773C24.8889 4.80053 24.739 4.43878 24.4723 4.17207C24.2056 3.90535 23.8439 3.75551 23.4667 3.75551ZM4.97778 3.75551C4.60058 3.75551 4.23883 3.90535 3.97211 4.17207C3.7054 4.43878 3.55556 4.80053 3.55556 5.17773C3.55556 5.55493 3.7054 5.91667 3.97211 6.18339C4.23883 6.45011 4.60058 6.59995 4.97778 6.59995C5.35497 6.59995 5.71672 6.45011 5.98344 6.18339C6.25016 5.91667 6.4 5.55493 6.4 5.17773C6.4 4.80053 6.25016 4.43878 5.98344 4.17207C5.71672 3.90535 5.35497 3.75551 4.97778 3.75551Z"
                        fill="#FEFEFE" />
                </svg> </span>
            <span class="ml-2 fonts-semibold text-lg tracking-wide truncate">Reviewers</span>
        </a>
    </li>
    @if (auth()->user()->role == 'super_admin')
        <li>
            <a href="/admin/add-admin"
                class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-[#325AB3] text-white hover:text-[#34A853] border-l-4 border-transparent hover:border-indigo-500 pl-6 py-8">
                <span class="inline-flex justify-center items-center ml-4">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                    </svg>
                </span>
                <span class="ml-2 fonts-semibold text-lg tracking-wide truncate">Add Admin</span>
            </a>
        </li>
    @endif
@endsection

@section('side')
    <div class="w-2/3 mx-auto bg-gray-100 rounded-lg p-10 mt-5">
        <form action="/admin/add-admin" method="post" enctype="multipart/form-data">
            @csrf
            <div class="bg-white rounded-lg p-8">
                <div class="w-full">
                    <p class="mb-4 before:content-['*'] before:ml-0.5 before:text-red-500">
                        Note: All newly added admin password is set to 1-8
                    </p>
                    <div class="flex">
                        <label class="w-full">
                            <span
                                class="after:content-['*'] after:ml-0.5 after:text-red-500 block text-sm font-medium text-slate-700">
                                Name
                            </span>
                            <input type="text" name="name"
                                class="h-12 mt-1 px-3 py-2 bg-white 
                        border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none
                        focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm 
                        focus:ring-1"
                                placeholder="Enter FirstName" value="{{ old('name') }}" />
                            @error('name')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </label>
                    </div>
                    <div class="flex mt-5">
                        <label class="w-full">
                            <span
                                class="after:content-['*'] after:ml-0.5 after:text-red-500 block text-sm font-medium text-slate-700">
                                Email
                            </span>
                            <input type="email" name="email"
                                class="h-12 mt-1 px-3 py-2 bg-white 
                        border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none
                        focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm 
                        focus:ring-1"
                                placeholder="Enter Email" value="{{ old('email') }}" />
                            @error('email')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </label>
                    </div>
                    <div class="mt-5">
                        <label class="w-full">
                            <span
                                class="after:content-['*'] after:ml-0.5 after:text-red-500  text-sm font-medium text-slate-700">
                                Research Type
                            </span>

                            <select name="specialization" id=""
                                class="h-12 px-3 py-2 bg-white
                            border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none
                            focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm 
                            focus:ring-1">
                                <option value="human">Human</option>
                                <option value="animal">Animal</option>
                            </select>
                            @error('specialization')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </label>
                    </div>
                    <div class="flex mt-5">
                        <label class="w-full">
                            <span
                                class="after:content-['*'] after:ml-0.5 after:text-red-500  text-sm font-medium text-slate-700">
                                Phone Number
                            </span>
                            <input type="contact" name="contact"
                                class="h-12 mt-1 px-3 py-2 bg-white 
                        border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none
                        focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm 
                        focus:ring-1"
                                placeholder="Enter Phone" value="{{ old('contact') }}" />
                            @error('contact')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </label>
                    </div>
                </div>
            </div>
            <div class="flex justify-center mt-5">
                <button class="text-white text-lg bg-[#2640A1] px-8 py-3 rounded-md" type="submit">Add Admin</button>
            </div>
        </form>
    </div>
@endsection
