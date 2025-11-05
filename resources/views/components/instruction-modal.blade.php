<div id="instructionModal" class="imodal">
    <span class="close-btn mb-2" onclick="closeModal()">&times;</span>
    <h2 class="text-lg mb-2">Animal Ethics Training Requirements</h2>
    <p class="text-sm font-light mb-2">New users of animals at the Obafemi Awolowo University, Ile-Ife are required to
        undergo training in animal ethics
        and welfare before obtaining clearance to work with animals.</p>
    <p class="text-sm font-light mb-2">Applicants to the Animal Care and Use Ethics Committee must familiarize
        themselves
        with the Nigerian sub ode for
        the Care and Use of Animals for scientific purposes (<a class="cursor-pointer text-[#2640A1]"
            href="http://nhrec.net/nhrec/wp-content/uploads/2018/10/Final-Sub-code-for-Research-involving-animal-use-v2.pdf"
            target="_blank">Link to Sub Code</a>) and explore the University's website for additional information.</p>
    <p>The Animal Care and Use Ethics Committee mandates the following:</p>
    <ul class="mt-2 font-light text-base list-disc pl-5">
        <li>University staff, students, title holders, and other applicants must complete an approved training course
            before approval of ethical clearance</li>
        <li>All animal users must undergo refresher training in animal ethics and welfare at least every five years</li>
        <li>Animal users are required to renew their animal ethics and welfare training in response to changes in the
            Code or relevant regulations, as deemed necessary by the committee.</li>
        <li>Applicants must successfully complete the online assessment before commencing work with animals.</li>
    </ul>
    <p class="mb-2">The course includes an online quiz to demonstrate competency and consists of 5 core learning
        modules:</p>
    <ol class="font-light text-base list-decimal pl-5">
        <li>Module 01: Ethics, animal use, and legislation</li>
        <li>Module 02: The Animal Ethics Committee and its expectations</li>
        <li>Module 03: Animal wellbeing and the 3Rs</li>
        <li>Module 04: Monitoring the health of animals</li>
        <li>Module 05: Humane methods of killing at the end of life</li>
        <li>Module 06: Final quiz covering modules 01-05</li>
    </ol>
</div>


@push('scripts')
    <script>
        function openModal() {
            document.getElementById('instructionModal').style.display = 'block';
        }

        function closeModal() {
            document.getElementById('instructionModal').style.display = 'none';
        }
    </script>
@endpush

@push('css')
    <style>
        /* Add your modal styles here */
        .imodal {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ccc;
            width: calc(100% - 2rem);
            max-width: 900px;
            max-height: 85vh;
            overflow-y: auto;
            z-index: 60;
            border-radius: 8px;
        }

        /* responsive: slightly narrower on very small screens */
        @media (max-width: 420px) {
            .imodal {
                padding: 12px;
                width: calc(100% - 1rem);
            }
        }

        .close-btn {
            position: absolute;
            top: 10px;
            right: 10px;
            cursor: pointer;
        }
    </style>
@endpush
