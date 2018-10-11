@extends('layouts.base')

@section('content')
    <div class="frame">
        <div class="frame__row">
            @include('partials.header', ['light' => true])
        </div>
        <div class="frame__row frame__row--expand ">
            <h1 class="title">Social Contest - Terms and conditions</h1>

            <p class="container mx-auto">
                <strong>Eligibility </strong><br><br>
                The Briqchain Social Contest is open only to those who are above the age of 18 years, and who sign up at <a href="https://www.briqchain.com/contest" target="_blank">Briqchain Contest</a> 
                <br><br>

                <strong>Privacy Policy </strong> <br><br>
                Information submitted with an entry is subject to the Privacy Policy stated on Vyper’s website. This can be found here: <a href="https://vyper.io/blog/privacy-policy/">Vyper Privacy Policy</a>" <br><br>

                <strong>Contest Time Period </strong> <br><br>
                Start date of the social contest is the 1st of Oktober. The social contest will run until Briqchain has completed its fund, or when our goal is reached. By partaking in the contest, participants acknowledge and understand that Briqchain may end the contest or change the time period of the contest at any time.
                <br><br>

                <strong>Entering the Contest </strong><br><br>
                The online form must be used to partake in and sign up for the contest. This form can be found at https://www.briqchain.com/contest. Sign-ups may not be incomplete or divert from the contests rules or specifications. This would result in disqualification at Briqchain’s discretion. Participants must fulfill all contest requirements, as specified, in order to be eligible to receive Briqs as reward for partaking in the contest. Only one valid entry per participant will be accepted, and all requested information ought to be provided in order for a sign up to constitute a valid entry. It is not permitted to sign up more times than indicated by using multiple email addresses, identities, or devices in an attempt to circumvent the rules. If you use fraudulent methods or otherwise attempt to circumvent the rules, your submission may be removed from eligibility at Briqchain’s sole discretion.
                 <br><br>

                <strong>Prize Structuring </strong> <br><br>
                The Winner(s) of the Contest will receive the prizes, as determined in the Briqchain Social Contest landing page. Actual/appraised value may differ at time of prize award. No cash or other prize substitution shall be permitted except at Briqchain’s discretion. The prize is non-transferable. Any and all prize-related expenses, including without limitation any and all federal, state, and/or local taxes, shall be the sole responsibility of the winner(s). No substitution of prize or transfer/assignment of prize to others or request for the cash equivalent by the winner(s) is permitted. Acceptance of prize constitutes permission for Briqchain to use the winners’ name and entry for purposes of advertising and trade without further compensation, unless prohibited by law. <br><br>

                <strong>Winner Selection and Notification </strong> <br><br>

                The Briqchain Social Contest winners will be selected in line with the contest’s structure and rules and based on the contest’s point system. Winners will be notified by email within five (5) days following the selection of winners. Briqchain shall have no liability for winner’s failure to receive notices due to spam, junk e-mail or other security settings or for winner’s provision of incorrect or otherwise non-functioning contact information. If winner cannot be contacted, is ineligible, fails to claim the prize within 10 office days from the time award notification was sent, or fails to timely return a completed and executed declaration and release as required, the prize may be forfeited and an alternate winner selected. Any violation of the rules stated in this Disclaimer by the winner will result in the winner’s disqualification as winner of the Contest, and all privileges as winner will be immediately terminated.<br><br>

                <strong>Terms & Conditions </strong> <br><br>

                Briqchain holds the right, in its sole discretion, to cancel, terminate, modify or suspend the Contest should virus, bug, non-authorized human intervention, fraud, or other cause beyond Briqchain’s control corrupt or affect the administration, security, fairness, or proper conduct of the Contest. BrickEX reserves the right, in its sole discretion, to disqualify any individual who tampers or attempts to tamper with the entry process or the operation of the Contest or website or violates these Terms & Conditions. Briqchain has the right, in its sole discretion, to maintain the integrity of the Contest, to void votes for any reason, including, but not limited to: multiple entries from the same user from different IP addresses; multiple entries from the same computer in excess of that allowed by Contest rules; or the use of bots, macros, scripts, or other technical means for entering. Any attempt by an entrant to deliberately damage any website or undermine the legitimate operation of the Contest may be a violation of criminal and civil laws. Should such attempt be made, Briqchain reserves the right to seek damages to the fullest extent permitted by law. <br><br>

                <strong>Agreement to Rules </strong> <br><br>

                By participating, participants are deemed to be fully and unconditionally aware of the content of this Disclaimer, and furthermore agree that no rights can be derived from this Disclaimer. In addition, by participating in this Contest, contestants understand that Briqchain can change the rules or content of this Disclaimer at all times.
                <br><br>
                <strong>Limitation of Liability </strong>
                <br><br>
                By entering, contestants agree to release and hold harmless Briqchain and its subsidiaries, affiliates, advertising and promotion agencies, partners, representatives, agents, successors, assigns, employees, officers, and directors from any liability, illness, injury, death, loss, litigation, claim, or damage that may occur, directly or indirectly, whether caused by negligence or not, from: (i) such entrant’s participation in the Contest and/or his/her acceptance, possession, use, or misuse of any prize or any portion thereof; (ii) technical failures of any kind, including but not limited to the malfunction of any computer, cable, network, hardware, or software, or other mechanical equipment; (iii) the unavailability or inaccessibility of any transmissions, telephone, or Internet service; (iv) unauthorized human intervention in any part of the entry process or the Promotion; (v) electronic or human error in the administration of the Promotion or the processing of entries. <br><br>

                <strong>The Briqchain Social Contest is in no way sponsored, endorsed, administered by, or associated with Facebook, Instagram, YouTube or Twitter. </strong> <br><br>
            </p>

        </div>
        <div>
            @include('partials/footer')
        </div>
    </div>

@endsection