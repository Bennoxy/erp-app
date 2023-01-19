@extends('layouts.admin')

@section('title', 'Employee Handbook')

@section('content')
   <!--start content-->
   <main class="page-content">
    <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Dashboard</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Employee HandBook</li>
                    </ol>
                </nav>
            </div>
            <div class="ms-auto">
                <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addVehicle">
                    <i class="bi bi-plus-circle"></i>  Add Vehicle
                </button> -->
                {{-- <a href="{{ route('vehiclelog.create') }}" role="button" class="btn btn-primary"><i class="bi bi-plus-circle"></i>  Add Log</a> --}}
            </div>
        </div>
    <!--end breadcrumb-->
				<!-- <h6 class="mb-0 text-uppercase">Manage Vehicle</h6> -->
				<hr/>
				<div class="card">
					<div class="card-body">
                        <h4 style="text-align: center;"><strong>EMPLOYEE HANDBOOK</strong></h4>
                        <h4>Introduction</h4>
                        <p>This policy document presents, Powerec Global Services Nigeria Limited integrated HR policies in a comprehensive, coordinated, and explicit manner.</p>
                        <p>&nbsp;</p>
                        <h4>Policy Objective</h4>
                        <p>The objectives of this policy document, which will guide the employee-employer relationship and foster a conducive working environment that supports achievements of goals and objectives at Powerec Global Services Nigeria Limited, are to ensure that:</p>
                        <ul>
                        <li>All employees will be selected and recruited into the organisation, based on their capabilities and abilities</li>
                        <li>Management philosophies and practices promote and encourage employee development to their full potential, as well as motivation and retention of the best employees.</li>
                        <li>The employment relationship is based on mutual trust, fairness, and equality of opportunity for</li>
                        </ul>
                        
                        
                        <p>Individual Line Managers/Supervisors are responsible for ensuring that this policy is applied within their units. The HR Department should be consulted before action is taken and can be contacted to answer any queries relating to the application or interpretation of this policy.</p>
                        <h4>&nbsp;</h4>
                        <h4>Vision</h4>
                        <ul>
                        <li>To become the leading engineering firm that meets global standars</li>
                        </ul>
                        <h4>Mission:</h4>
                        <ul>
                        <li>To become the first company of choice to our client&rsquo;s in our core area of competency and businesses</li>
                        <li>To undertake every engineering aspect to meet customer requirements quality, on-time delivery, safety, and environmental concerns</li>
                        <li>To Provide world class technology to our clients</li>
                        </ul>
                        <p>&nbsp;</p>
                        <h5>OUR CORE VALUES</h5>
                        
                        <p>Powerec Global Services Nigeria Limited, we are committed to a set of core values that not only define who we are but also serve as guideposts to help us become the Company we would like to be. Our core values are:
                        <ul>
                            <li><p>Integrity</p></li>
                            <li><p>Impactful</p></li>
                            <li><p>Innovative</p></li>
                            <li><p>Creativity</p></li>
                            <li><p>Customer Focus</p></li>
                            <li><p>Excellence Service</p></li>
                        </ul>
                        <p>&nbsp;</p>
                        <p>The Role of HR is to achieve the envisioned place in our chosen markets and be an employer of choice, HR will play the following strategic and fundamental distinct roles:</p>
                        <ul>
                            <li><p>Strategic partner</p></li>
                            <li><p>Change agent</p></li>
                            <li><p>Employee champion</p></li>
                        </ul>
                        <p>&nbsp;</p>
                        <h4>Code of Conduct &amp; Ethical Principles</h4>
                        <p>The purpose of this code is to provide a clear framework with which Powerec Global Services Nigeria Limited employees are expected to conduct themselves within and outside the Company.</p>
                        <p>&nbsp;</p>
                        <h4>Policy Statement</h4>
                        <p>Powerec Global Services Nigeria Limited shall strive to maintain a conducive work environment whereby integrity, transparency respect for others&rsquo; opinions will be reflected as a standard of professional conduct.</p>
                        <p>&nbsp;</p>
                        <h5>POLICY GUIDELINESS</h5>
                        <h4>Powerec Global Services Nigeria Limited ethical principles shall be built on:</h4>
                        <ul>
                            <li>Dependability and doing the right thing all the</li>
                            <li>Openness to different ideas, diversity and</li>
                            <li>Commitment to and connecting with our customers, com-community and each</li>
                            <li>Treating every customer&rsquo;s business, financial and personal affairs with confidentiality and being careful with-communication on top information safe and Standard Code of Behaviour.</li>
                            <li>Powerec Global Services Nigeria Limited encourages employees to bring their disputes to the attention of their supervisors or Human Resources before the situation escalates. Powerec Global Services Nigeria Limited will not discipline employees for raising such concerns.</li>
                        </ul>                        
                        
                        <p>&nbsp;</p>
                        <h4>Anti-corruption &amp; Bribery Policy</h4>
                        <p>The purpose of this policy is to define Powerec Global Services Nigeria Limited and its employees&rsquo; responsibilities in observing and upholding the Company&rsquo;s position regarding bribery and corruption. This policy shall apply to all employees at all levels and grades, whether permanent, fixed-term or, temporary, consultants, contractors, trainees, seconded staff, casual workers and Company staff, volunteers, interns, agents, sponsors, or any other person associated with the Company.</p>
                        
                        <ul>
                        <li>The Company has a zero-tolerance approach to bribery and corruption and shall be committed to acting professionally, fairly and within the city in all its relationships and business dealings wherever it operates. It shall implement and enforce effective systems to counter bribery.</li>
                        <li>Employee&rsquo;s responsibility; bribery and other forms of corruption are the responsibility of all Powerec Global Services Nigeria Limited employees and they are under obligation to refrain from any activity that might lead to, or suggest, a breach of this policy.</li>
                        </ul>
                        <p>&nbsp;</p>
                        <h4>Powerec Global Services Nigeria Limited Statement of Commitment</h4>
                        <ul>
                        <li>The Company commits to provide employees equal opportunities to realise their potential and career aspirations.</li>
                        <li>Conscious efforts shall be made to protect the well-being and dignity of all employees to deepen their psychological bond and commitment to increase performance.</li>
                        </ul>
                        <strong><p>Working Hours</p></strong>
                        <ol>
                        <li>The Company observes a five (5 days working week (Monday through Friday), occasionally on Saturdays. The official resumption time is 8:00 am and the closing time is 5:00 pm which includes a one (1) hour break from Monday-Friday 9:00 am-2:00 pm on Saturdays.</li>
                        <li>Every employee is required to be conscientious about punctuality and attendance. Lateness by employees shall be dealt with in line with the disciplinary procedure.</li>
                        </ol>
                        <strong><p>Lunch Break</p></strong>
                        <p>All employees are allowed a one-hour lunch break each working day 1:00pm- 2:00 pm.</p>
                        
                        <strong><p>Employees&rsquo; Responsibilities</p></strong>
                        <p>Protection of Powerec Global Services Nigeria Limited Property</p>
                        <ol>
                        <li>Employees are responsible for any Powerec Global Services Nigeria Limited property issued to them.</li>
                        </ol>
                        <strong><p>Smoking</p></strong>
                        <ol>
                        <li>Powerec Global Nigeria Limited recognises the danger to health caused by smoking and the discomfort to non-smokers. Taking into account both the effects on smokers and the feelings of those who do not, a no-smoking rule exists within the office environment, vehicles etc.</li>
                        </ol>
                        <strong><p>Drug/Alcohol in the workplace</p></strong>
                        <ul>
                        <li>Employees are not allowed to take alcoholic or drug substances within the Company&rsquo;s premises. Drug abuse is illegal and prohibited. Offenders shall be treated by the disciplinary procedure.</li>
                        </ul>
                        <strong><p>Absence from work</p></strong>
                        <ul>
                        <li>Employees shall explain the reason for and agree absence from work with Line Manager and notify HR the day before the planned absence or as soon as they are aware that they will be absent. In cases where they have client or third party they should make alternate plans on the client&rsquo;s behalf so that they do not suffer.</li>
                        <li>Lateness</li>
                        <li>Loitering</li>
                        <li>Employees must not be found loitering around the work/Site premises during work hours.</li>
                        </ul>
                        <p>&nbsp;</p>
                        <div style="overflow-x:auto;">
                            <table width="683" style="border: 1px solid black; border-collapse: collapse; padding: 5px;  margin-left: auto; margin-right: auto;">
                            <tbody>
                            <tr>
                                <td width="116" style="border: 1px solid black; border-collapse: collapse; padding: 5px">
                                    <p><strong>OUTFIT</strong></p>
                                </td>
                                <td width="203" style="border: 1px solid black; border-collapse: collapse; padding: 5px">
                                    <p><strong>COLOURS</strong></p>
                                </td>
                                <td width="364" style="border: 1px solid black; border-collapse: collapse; padding: 5px">
                                    <p><strong>GUIDE</strong></p>
                                </td>
                            </tr>
                            <tr>
                                <td width="116" style="border: 1px solid black; border-collapse: collapse; padding: 5px">
                                    <p>Formal Skirts, Shirts, Dresses, Trouser</p>
                                    <p>Suits.</p>
                                </td>
                                <td width="203" style="border: 1px solid black; border-collapse: collapse; padding: 5px">
                                    <p>Discretionary but sober/formal colours.</p>
                                    <p>&nbsp;</p>
                                    <p>Identification Cards must be worn and visible at all times.</p>
                                </td>
                                <td width="364" style="border: 1px solid black; border-collapse: collapse; padding: 5px">
                                    <p>Long/short sleeved dresses, shirts and blouses are acceptable. The following are not allowed:</p>
                                    <p>Very low neckline, sleeveless blouses and dresses (except with jackets), body hugging dresses, very tight miniskirts. The standard dress or skirt size allowable is knee length.</p>
                                </td>
                            </tr>
                            <tr>
                            <td width="116" style="border: 1px solid black; border-collapse: collapse; padding: 5px">
                            <p>Footwear</p>
                            </td>
                            <td width="203" style="border: 1px solid black; border-collapse: collapse; padding: 5px">
                            <p>Colour to coordinate with outfit, leather or suede cover shoes, open toes.</p>
                            </td>
                            <td width="364" style="border: 1px solid black; border-collapse: collapse; padding: 5px">
                            <p>Slippers and sandals are not allowed except after close of business. Loafers/flat heeled cover shoes within the office are permissible. Flip flops are not allowed.</p>
                            </td>
                            </tr>
                            <tr>
                            <td width="116" style="border: 1px solid black; border-collapse: collapse; padding: 5px">
                            <p>Casual/ Native Wears</p>
                            </td>
                            <td width="203" style="border: 1px solid black; border-collapse: collapse; padding: 5px">
                            <p>Decently designed native outfits (long/short) or Smart casual is allowed.</p>
                            <p>&nbsp;</p>
                            <p>Shirts with offensive/vulgar symbols/words are not allowed.</p>
                            </td>
                            <td width="364" style="border: 1px solid black; border-collapse: collapse; padding: 5px">
                            <p>Suitable only on Fridays. However, please note this does not apply for client facing staff who intend to attend meetings.</p>
                            <p>Business Managers/supervisors will communicate acceptable</p>
                            <p>Friday dress code for their unit.</p>
                            </td>
                            </tr>
                            <tr>
                            <td width="116" style="border: 1px solid black; border-collapse: collapse; padding: 5px">
                            <p>Formal Attire &ndash; Trousers</p>
                            </td>
                            <td width="203" style="border: 1px solid black; border-collapse: collapse; padding: 5px">
                            <p>Discretionary but sober like Black, Navy Blue, Grey (striped or plain) colours. Jeans/Denim are not allowed during work hours on Monday</p>
                            <p>&ndash; Thursday.</p>
                            <p>&nbsp;</p>
                            <p>Identification Cards must be worn and visible at all times.</p>
                            </td>
                            <td width="364" style="border: 1px solid black; border-collapse: collapse; padding: 5px">
                            <p>To be worn with clean, well ironed matching short or long</p>
                            <p>sleeve shirts</p>
                            </td>
                            </tr>
                            <tr>
                            <td width="116" style="border: 1px solid black; border-collapse: collapse; padding: 5px">
                            <p>Shirts</p>
                            </td>
                            <td width="203" style="border: 1px solid black; border-collapse: collapse; padding: 5px">
                            <p>Sober colours (Plain white or sky blue)</p>
                            </td>
                            <td width="364" style="border: 1px solid black; border-collapse: collapse; padding: 5px">
                            <p>Long/short sleeves collared shirts (shirt tails should be tucked in) Loud colours are discouraged.</p>
                            </td>
                            </tr>
                            <tr>
                            <td width="116" style="border: 1px solid black; border-collapse: collapse; padding: 5px">
                            <p>Belts</p>
                            </td>
                            <td width="203" style="border: 1px solid black; border-collapse: collapse; padding: 5px">
                            <p>Black/brown leather only</p>
                            </td>
                            <td width="364" style="border: 1px solid black; border-collapse: collapse; padding: 5px">
                            <p>Good leather belts are recommended. It makes good dress sense to match the colour of shoes and belts.</p>
                            </td>
                            </tr>
                            <tr>
                            <td width="116" style="border: 1px solid black; border-collapse: collapse; padding: 5px">
                            <p>Footwear</p>
                            </td>
                            <td width="203" style="border: 1px solid black; border-collapse: collapse; padding: 5px">
                            <p>Black/brown leather or suede cover shoes only</p>
                            </td>
                            <td width="364" style="border: 1px solid black; border-collapse: collapse; padding: 5px">
                            <p>Slip-ons, slippers and sandals not allowed.</p>
                            </td>
                            </tr>
                            <tr>
                            <td width="116" style="border: 1px solid black; border-collapse: collapse; padding: 5px">
                            <p>Casual/Native Wears</p>
                            </td>
                            <td width="203" style="border: 1px solid black; border-collapse: collapse; padding: 5px">
                            <p>Decently designed native outfits/Smart casual.</p>
                            <p>Shirts with ffensive/vulgar symbols/words are not allowed</p>
                            </td>
                            <td width="364" style="border: 1px solid black; border-collapse: collapse; padding: 5px">
                            <p>Suitable only on Fridays.</p>
                            <p>&nbsp;</p>
                            <p>However, please note this does not apply for client facing staff who intend to attend meetings.</p>
                            <p>Business Managers/ Supervisors will communicate acceptable Friday dress code for their unit.</p>
                            </td>
                            </tr>
                            </tbody>
                            </table>
                        </div>
                        <p>&nbsp;</p>
                        <strong><p>Resignation Notice</p></strong>
                        <p>The Company or an employee can terminate employment within a notice period given as follows (or as stated in the contract of employment):</p>
                        <ol>
                        <li>Junior &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1 month notice</li>
                        <li>Mid Management &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2 months&rsquo; notice</li>
                        <li>Management &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2 months&rsquo; notice</li>
                        <li>Senior Management &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 3 months&rsquo; notice</li>
                        </ol>
                        <p>&nbsp;</p>
                        <strong><p>Diversity and Inclusion</p></strong>
                        <p>Powerec Global Services Nigeria Limited is an equal opportunity employer and this being the case, recruitment decisions shall be made without regard to tribe, ancestry, place of origin, colour, ethnic origin, creed, sex, sexual orientation, marital status, family status or handicap.</p>
                        <ul>
                        <li>Learning &amp; Development</li>
                        <li>Learning and Development is one of the means to equip employees with requisite competencies to effectively carry out their duties and fit into future roles, and for building an empowered workforce.</li>
                        </ul>
                        <p>&nbsp;</p>
                        <strong><p>Policy Statement</p></strong>
                        <p>Powerec Global Services Nigeria Limited believes that effective learning and development benefits the employee and the organisation as a whole. Training shall be a shared responsibility of individual employees, Line Managers and HR Department.</p>
                        </ul>
                        <p>&nbsp;</p>
                        <strong><p>Succession Planning</p></strong>
                        <p>Succession planning involves the systematic identification and development of internal replacement strategies for key positions which are critical to meeting the strategic goals and objectives of Powerec Global Services Nigeria Limited.</p>
                        <p>&nbsp;</p>
                        <strong><p>Performance Management</p></strong>
                        <p>The purpose of this policy is to clearly articulate the framework to manage and measure employee performance in order to achieve organisational objectives.</p>
                        <p>&nbsp;</p>
                        <strong><p>Policy Statement</p></strong>
                        <p>Powerec Global Services Nigeria Limited shall develop a system that manages employee performance and promotes objective performance assessment being the basis for training, career development and rewards. Focus will be on instituting a performance-based culture that value:</p>
                        
                        <ol>
                        <li>Achievement of results.</li>
                        <li>Focus on customers.</li>
                        <li>Development and retention of talents.</li>
                        </ol>
                        <ul>
                        In addition, HR Department will work continuously with the Management to create an enabling environment that promotes:
                        </ul>
                        <ol>
                        <li>Flexibility.</li>
                        <li>Clarity of purpose.</li>
                        <li>High standard.</li>
                        </ol>
                        <p>&nbsp;</p>
                        <strong><p>Annual Leave/Paid Time Off</p></strong>
                        <ul>
                        <li>In order to deliver its strategic corporate objectives effectively and to achieve the desired employer of choice status, Powerec Global Services Nigeria Limited strives for the highest levels of productivity and performance from its employees. To this end, Powerec Global Services Nigeria Limited employees are encouraged to take time off work to rejuvenate.</li>
                        <li>All employees are entitled to annual vacation of 10 working days.</li>
                        <li>Employees are expected to take their holiday as much as possible, during periods when the pressure of work most easily permits them to do so.</li>
                        </ul>
                        <p>&nbsp;</p>
                        <strong><p>Leave of Absence</p></strong>
                        <p>A leave of absence is a period of time during which a full-time regular employee is away from work without pay though continues to maintain an employment relationship with the Company.</p>
                        <p>&nbsp;</p>
                        <strong><p>Sick Leave</p></strong>
                        <p>An employee absent from work on account of illness is required to:</p>
                        <p>Contact their Line Managers or Team Lead immediately by telephone or other means as soon as possible</p>
                        
                        <p>&nbsp;</p>
                        <strong><p>Disciplinary Policy</p></strong>
                        <p>The purpose of this policy is to enforce work rules, maintain order, promote safety and ensure quality work. Setting out the rules in this way is intended to establish standards of conduct at work and to indicate actions the Company will take following non-compliance.</p>
                        <strong><p>Policy Statement</p></strong>
                        
                        <p>The purpose of this policy is to clearly establish how the Company will deal with unacceptable behaviour by employees.</p>
                        
                        <p>&nbsp;</p>
                        <strong><p>Gross Misconduct</p></strong>
                        
                        <p>Gross Misconduct applies to those offences which are considered serious enough for the employment relationship to be irrevocably damaged and make further working relationship and/or trust between the employee and Powerec Global Services Nigeria Limited impossible. The under listed offences shall be considered as gross misconduct, though the list is not exhaustive:</p>
                        <ol>
                        <li>Falsification of facts for self, Powerec Global Services Nigeria Limited or customers.</li>
                        <li>Theft or fraud.</li>
                        <li>Confirmed sexual harassment.</li>
                        <li>Willful serious damage to Company&rsquo;s property.</li>
                        <li>Willful breach of agreement or trust.</li>
                        <li>Acts of corruption or attempts at corrupting others.</li>
                        <li>Alteration to structures and fixtures without due approval.</li>
                        <li>Persistent refusal to comply with Company rules, regulations and ethics.</li>
                        <li>Willful and persistent disclosure of confidential information about Powerec Global Services Nigeria Limited, its clients or any other matter pertaining to the Company, its operations, alliance partners, directors, staff and other family.</li>
                        <li>Other acts of gross misconduct which may merit a summary dismissal in line with the Nigerian Labour Act.</li>
                        <li>Abusive behaviour, discrimination, bullying or harassment of another employee</li>
                        <li>Incapability brought on by alcohol or drug abuse or taking of alcohol during official hours.</li>
                        </ol>
                        <strong><p>Other Misconduct</p></strong>
                        <p>A single breach of discipline which might lead to disciplinary action, but not normally dismissal shall be categorised as other misconduct.</p>
                        <p>However, if the breach is repeated, it may lead to dismissal.</p>
                        <ol>
                        <li>Persistent lateness to work and meetings.</li>
                        <li>Failure to dress professionally.</li>
                        <li>Unauthorised absence from work.</li>
                        <li>Failure to comply with the procedure for notification of absence from duty.</li>
                        <li>Failure to meet agreed work standards by an employee after receipt of an Improvement Notice.</li>
                        <li>Infringement of health and safety rules.</li>
                        <li>Poor personal hygiene.</li>
                        <li>Smoking in non-designated areas.</li>
                        <li>Merchandising within the office premises.</li>
                        <li>Insubordination.</li>
                        </ol>
                        
                        <p>&nbsp;</p>
                        <strong><p>Sanction Grid</p></strong>
                        <p>KEY</p>
                        <ol>
                        <li>Counselling and/or Verbal Caution that arises out of a disciplinary process.</li>
                        <li>Written Caution.</li>
                        <li>Warning.</li>
                        <li>Final warning.</li>
                        <li>Suspension.</li>
                        <li>Termination.</li>
                        <li>Dismissal.</li>
                        </ol>
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                        <div style="overflow-x:auto;">
                            <table width="714" style="border: 1px solid black; border-collapse: collapse; padding: 5px;  margin-left: auto; margin-right: auto;">
                            <tbody>
                            <tr>
                            <td rowspan="2" width="50" style="border: 1px solid black; border-collapse: collapse; padding: 5px">
                            <p><strong>S/N</strong></p>
                            </td>
                            <td rowspan="2" width="321" style="border: 1px solid black; border-collapse: collapse; padding: 5px">
                            <p><strong>MISCONDUCT</strong></p>
                            </td>
                            <td colspan="4" width="344" style="border: 1px solid black; border-collapse: collapse; padding: 5px">
                            <p><strong>FREQUENCY OF OCCURRENCE OF MISCONDUCT/APPLICABLE&nbsp;&nbsp;&nbsp; SANCTIONS</strong></p>
                            </td>
                            </tr>
                            <tr>
                            <td width="104" style="border: 1px solid black; border-collapse: collapse; padding: 5px" style="border: 1px solid black; border-collapse: collapse; padding: 5px">
                            <p><strong>1ST</strong></p>
                            </td>
                            <td width="104" style="border: 1px solid black; border-collapse: collapse; padding: 5px" style="border: 1px solid black; border-collapse: collapse; padding: 5px">
                            <p><strong>2ND</strong></p>
                            </td>
                            <td width="70" style="border: 1px solid black; border-collapse: collapse; padding: 5px" style="border: 1px solid black; border-collapse: collapse; padding: 5px">
                            <p><strong>3RD</strong></p>
                            </td>
                            <td width="66" style="border: 1px solid black; border-collapse: collapse; padding: 5px" style="border: 1px solid black; border-collapse: collapse; padding: 5px">
                            <p><strong>4TH</strong></p>
                            </td>
                            </tr>
                            <tr>
                            <td width="50" style="border: 1px solid black; border-collapse: collapse; padding: 5px">
                            <p>1</p>
                            </td>
                            <td width="321" style="border: 1px solid black; border-collapse: collapse; padding: 5px">
                            <p>*General Misdemeanour</p>
                            </td>
                            <td width="104" style="border: 1px solid black; border-collapse: collapse; padding: 5px">
                            <p>1</p>
                            </td>
                            <td width="104" style="border: 1px solid black; border-collapse: collapse; padding: 5px">
                            <p>2</p>
                            </td>
                            <td width="70" style="border: 1px solid black; border-collapse: collapse; padding: 5px">
                            <p>3</p>
                            </td>
                            <td width="66" style="border: 1px solid black; border-collapse: collapse; padding: 5px">
                            <p>6</p>
                            </td>
                            </tr>
                            <tr>
                            <td width="50" style="border: 1px solid black; border-collapse: collapse; padding: 5px">
                            <p>2</p>
                            </td>
                            <td width="321" style="border: 1px solid black; border-collapse: collapse; padding: 5px">
                            <p>Absenteeism without authority</p>
                            </td>
                            <td width="104" style="border: 1px solid black; border-collapse: collapse; padding: 5px">
                            <p>3</p>
                            </td>
                            <td width="104" style="border: 1px solid black; border-collapse: collapse; padding: 5px">
                            <p>4</p>
                            </td>
                            <td width="70" style="border: 1px solid black; border-collapse: collapse; padding: 5px">
                            <p>6</p>
                            </td>
                            <td width="66" style="border: 1px solid black; border-collapse: collapse; padding: 5px">&nbsp;</td>
                            </tr>
                            <tr>
                            <td width="50" style="border: 1px solid black; border-collapse: collapse; padding: 5px">
                            <p>3</p>
                            </td>
                            <td width="321" style="border: 1px solid black; border-collapse: collapse; padding: 5px">
                            <p>*Negligence/Dereliction of duty</p>
                            </td>
                            <td width="104" style="border: 1px solid black; border-collapse: collapse; padding: 5px">
                            <p>4</p>
                            </td>
                            <td width="104" style="border: 1px solid black; border-collapse: collapse; padding: 5px">
                            <p>5 (2 weeks)</p>
                            </td>
                            <td width="70" style="border: 1px solid black; border-collapse: collapse; padding: 5px">
                            <p>6</p>
                            </td>
                            <td width="66" style="border: 1px solid black; border-collapse: collapse; padding: 5px">&nbsp;</td>
                            </tr>
                            <tr>
                            <td width="50" style="border: 1px solid black; border-collapse: collapse; padding: 5px">
                            <p>4</p>
                            </td>
                            <td width="321" style="border: 1px solid black; border-collapse: collapse; padding: 5px">
                            <p>Insubordination</p>
                            </td>
                            <td width="104" style="border: 1px solid black; border-collapse: collapse; padding: 5px">
                            <p>4</p>
                            </td>
                            <td width="104" style="border: 1px solid black; border-collapse: collapse; padding: 5px">
                            <p>5 (2 weeks)</p>
                            </td>
                            <td width="70" style="border: 1px solid black; border-collapse: collapse; padding: 5px">
                            <p>6</p>
                            </td>
                            <td width="66" style="border: 1px solid black; border-collapse: collapse; padding: 5px">&nbsp;</td>
                            </tr>
                            <tr>
                            <td width="50" style="border: 1px solid black; border-collapse: collapse; padding: 5px">
                            <p>5</p>
                            </td>
                            <td width="321" style="border: 1px solid black; border-collapse: collapse; padding: 5px">
                            <p>Unruly and unprofessional behaviour e.g. loud exchange of words</p>
                            </td>
                            <td width="104" style="border: 1px solid black; border-collapse: collapse; padding: 5px">
                            <p>4</p>
                            </td>
                            <td width="104" style="border: 1px solid black; border-collapse: collapse; padding: 5px">
                            <p>6</p>
                            </td>
                            <td width="70" style="border: 1px solid black; border-collapse: collapse; padding: 5px">&nbsp;</td>
                            <td width="66" style="border: 1px solid black; border-collapse: collapse; padding: 5px">&nbsp;</td>
                            </tr>
                            <tr>
                            <td width="50" style="border: 1px solid black; border-collapse: collapse; padding: 5px">
                            <p>6</p>
                            </td>
                            <td width="321" style="border: 1px solid black; border-collapse: collapse; padding: 5px">
                            <p>Use of foul language</p>
                            </td>
                            <td width="104" style="border: 1px solid black; border-collapse: collapse; padding: 5px">
                            <p>2</p>
                            </td>
                            <td width="104" style="border: 1px solid black; border-collapse: collapse; padding: 5px">
                            <p>4</p>
                            </td>
                            <td width="70" style="border: 1px solid black; border-collapse: collapse; padding: 5px">
                            <p>6</p>
                            </td>
                            <td width="66" style="border: 1px solid black; border-collapse: collapse; padding: 5px">&nbsp;</td>
                            </tr>
                            <tr>
                            <td width="50" style="border: 1px solid black; border-collapse: collapse; padding: 5px">
                            <p>7</p>
                            </td>
                            <td width="321" style="border: 1px solid black; border-collapse: collapse; padding: 5px">
                            <p>Rudeness to customer (internal and external)</p>
                            </td>
                            <td width="104" style="border: 1px solid black; border-collapse: collapse; padding: 5px">
                            <p>5 (1 month)</p>
                            </td>
                            <td width="104" style="border: 1px solid black; border-collapse: collapse; padding: 5px">
                            <p>6</p>
                            </td>
                            <td width="70" style="border: 1px solid black; border-collapse: collapse; padding: 5px">&nbsp;</td>
                            <td width="66" style="border: 1px solid black; border-collapse: collapse; padding: 5px">&nbsp;</td>
                            </tr>
                            <tr>
                            <td width="50" style="border: 1px solid black; border-collapse: collapse; padding: 5px">
                            <p>8</p>
                            </td>
                            <td width="321" style="border: 1px solid black; border-collapse: collapse; padding: 5px">
                            <p>Established cases of doubtful Integrity or Dishonesty</p>
                            </td>
                            <td width="104" style="border: 1px solid black; border-collapse: collapse; padding: 5px">
                            <p>6</p>
                            </td>
                            <td width="104" style="border: 1px solid black; border-collapse: collapse; padding: 5px">&nbsp;</td>
                            <td width="70" style="border: 1px solid black; border-collapse: collapse; padding: 5px">&nbsp;</td>
                            <td width="66" style="border: 1px solid black; border-collapse: collapse; padding: 5px">&nbsp;</td>
                            </tr>
                            <tr>
                            <td width="50" style="border: 1px solid black; border-collapse: collapse; padding: 5px">
                            <p>9</p>
                            </td>
                            <td width="321" style="border: 1px solid black; border-collapse: collapse; padding: 5px">
                            <p>Unauthorized financial commitment of the Company with external parties or customers</p>
                            </td>
                            <td width="104" style="border: 1px solid black; border-collapse: collapse; padding: 5px">
                            <p>7</p>
                            </td>
                            <td width="104" style="border: 1px solid black; border-collapse: collapse; padding: 5px">&nbsp;</td>
                            <td width="70" style="border: 1px solid black; border-collapse: collapse; padding: 5px">&nbsp;</td>
                            <td width="66" style="border: 1px solid black; border-collapse: collapse; padding: 5px">&nbsp;</td>
                            </tr>
                            <tr>
                            <td width="50" style="border: 1px solid black; border-collapse: collapse; padding: 5px">
                            <p>10</p>
                            </td>
                            <td width="321" style="border: 1px solid black; border-collapse: collapse; padding: 5px">
                            <p>Fighting</p>
                            </td>
                            <td width="104" style="border: 1px solid black; border-collapse: collapse; padding: 5px">
                            <p>6</p>
                            </td>
                            <td width="104" style="border: 1px solid black; border-collapse: collapse; padding: 5px">&nbsp;</td>
                            <td width="70" style="border: 1px solid black; border-collapse: collapse; padding: 5px">&nbsp;</td>
                            <td width="66" style="border: 1px solid black; border-collapse: collapse; padding: 5px">&nbsp;</td>
                            </tr>
                            <tr>
                            <td width="50" style="border: 1px solid black; border-collapse: collapse; padding: 5px">
                            <p>11</p>
                            </td>
                            <td width="321" style="border: 1px solid black; border-collapse: collapse; padding: 5px">
                            <p>Deliberate and willful misrepresentation of facts to external parties that result in financial loss to the Company or cause embarrassment</p>
                            </td>
                            <td width="104" style="border: 1px solid black; border-collapse: collapse; padding: 5px">
                            <p>6</p>
                            </td>
                            <td width="104" style="border: 1px solid black; border-collapse: collapse; padding: 5px">&nbsp;</td>
                            <td width="70" style="border: 1px solid black; border-collapse: collapse; padding: 5px">&nbsp;</td>
                            <td width="66" style="border: 1px solid black; border-collapse: collapse; padding: 5px">&nbsp;</td>
                            </tr>
                            <tr>
                            <td width="50" style="border: 1px solid black; border-collapse: collapse; padding: 5px">
                            <p>12</p>
                            </td>
                            <td width="321" style="border: 1px solid black; border-collapse: collapse; padding: 5px">
                            <p>Disclosure of Company&rsquo;s operating secrets/manual strategy</p>
                            </td>
                            <td width="104" style="border: 1px solid black; border-collapse: collapse; padding: 5px">
                            <p>7</p>
                            </td>
                            <td width="104" style="border: 1px solid black; border-collapse: collapse; padding: 5px">&nbsp;</td>
                            <td width="70" style="border: 1px solid black; border-collapse: collapse; padding: 5px">&nbsp;</td>
                            <td width="66" style="border: 1px solid black; border-collapse: collapse; padding: 5px">&nbsp;</td>
                            </tr>
                            <tr>
                            <td width="50" style="border: 1px solid black; border-collapse: collapse; padding: 5px">
                            <p>13</p>
                            </td>
                            <td width="321" style="border: 1px solid black; border-collapse: collapse; padding: 5px">
                            <p>3 letters of displeasure for different misconduct within a twelve (12) month period</p>
                            </td>
                            <td width="104" style="border: 1px solid black; border-collapse: collapse; padding: 5px">
                            <p>4</p>
                            </td>
                            <td width="104" style="border: 1px solid black; border-collapse: collapse; padding: 5px">
                            <p>5 (2 weeks)</p>
                            </td>
                            <td width="70" style="border: 1px solid black; border-collapse: collapse; padding: 5px">
                            <p>6</p>
                            </td>
                            <td width="66" style="border: 1px solid black; border-collapse: collapse; padding: 5px">&nbsp;</td>
                            </tr>
                            <tr>
                            <td width="50" style="border: 1px solid black; border-collapse: collapse; padding: 5px">
                            <p>14</p>
                            </td>
                            <td width="321" style="border: 1px solid black; border-collapse: collapse; padding: 5px">
                            <p>3 Caution letters for different misconduct within a twelve (12) month period</p>
                            </td>
                            <td width="104" style="border: 1px solid black; border-collapse: collapse; padding: 5px">
                            <p>4</p>
                            </td>
                            <td width="104" style="border: 1px solid black; border-collapse: collapse; padding: 5px">
                            <p>5 (2 weeks)</p>
                            </td>
                            <td width="70" style="border: 1px solid black; border-collapse: collapse; padding: 5px">
                            <p>6</p>
                            </td>
                            <td width="66" style="border: 1px solid black; border-collapse: collapse; padding: 5px">&nbsp;</td>
                            </tr>
                            <tr>
                            <td width="50" style="border: 1px solid black; border-collapse: collapse; padding: 5px">
                            <p>15</p>
                            </td>
                            <td width="321" style="border: 1px solid black; border-collapse: collapse; padding: 5px">
                            <p>3 warnings for different misconduct within a twelve (12) month period</p>
                            </td>
                            <td width="104" style="border: 1px solid black; border-collapse: collapse; padding: 5px">
                            <p>6</p>
                            </td>
                            <td width="104" style="border: 1px solid black; border-collapse: collapse; padding: 5px">&nbsp;</td>
                            <td width="70" style="border: 1px solid black; border-collapse: collapse; padding: 5px">&nbsp;</td>
                            <td width="66" style="border: 1px solid black; border-collapse: collapse; padding: 5px">&nbsp;</td>
                            </tr>
                            <tr>
                            <td width="50" style="border: 1px solid black; border-collapse: collapse; padding: 5px">
                            <p>16</p>
                            </td>
                            <td width="321" style="border: 1px solid black; border-collapse: collapse; padding: 5px">
                            <p>2 suspensions within a twelve (12) month period</p>
                            </td>
                            <td width="104" style="border: 1px solid black; border-collapse: collapse; padding: 5px">
                            <p>6</p>
                            </td>
                            <td width="104" style="border: 1px solid black; border-collapse: collapse; padding: 5px">&nbsp;</td>
                            <td width="70" style="border: 1px solid black; border-collapse: collapse; padding: 5px">&nbsp;</td>
                            <td width="66" style="border: 1px solid black; border-collapse: collapse; padding: 5px">&nbsp;</td>
                            </tr>
                            <tr>
                            <td width="50" style="border: 1px solid black; border-collapse: collapse; padding: 5px">
                            <p>17</p>
                            </td>
                            <td width="321" style="border: 1px solid black; border-collapse: collapse; padding: 5px">
                            <p>Willful and deliberate diversion of the Company&rsquo;s customers to competitors</p>
                            </td>
                            <td width="104" style="border: 1px solid black; border-collapse: collapse; padding: 5px">
                            <p>6</p>
                            </td>
                            <td width="104" style="border: 1px solid black; border-collapse: collapse; padding: 5px">&nbsp;</td>
                            <td width="70" style="border: 1px solid black; border-collapse: collapse; padding: 5px">&nbsp;</td>
                            <td width="66" style="border: 1px solid black; border-collapse: collapse; padding: 5px">&nbsp;</td>
                            </tr>
                            <tr>
                            <td width="50" style="border: 1px solid black; border-collapse: collapse; padding: 5px">
                            <p>18</p>
                            </td>
                            <td width="321" style="border: 1px solid black; border-collapse: collapse; padding: 5px">
                            <p>Breach of Covenant of confidentiality of the Company</p>
                            </td>
                            <td width="104" style="border: 1px solid black; border-collapse: collapse; padding: 5px">
                            <p>6</p>
                            </td>
                            <td width="104" style="border: 1px solid black; border-collapse: collapse; padding: 5px">&nbsp;</td>
                            <td width="70" style="border: 1px solid black; border-collapse: collapse; padding: 5px">&nbsp;</td>
                            <td width="66" style="border: 1px solid black; border-collapse: collapse; padding: 5px">&nbsp;</td>
                            </tr>
                            <tr>
                            <td width="50" style="border: 1px solid black; border-collapse: collapse; padding: 5px">
                            <p>19</p>
                            </td>
                            <td width="321" style="border: 1px solid black; border-collapse: collapse; padding: 5px">
                            <p>i. Falsification of facts especially on behalf of customers or for own benefit</p>
                            </td>
                            <td width="104" style="border: 1px solid black; border-collapse: collapse; padding: 5px">&nbsp;</td>
                            <td width="104" style="border: 1px solid black; border-collapse: collapse; padding: 5px">&nbsp;</td>
                            <td width="70" style="border: 1px solid black; border-collapse: collapse; padding: 5px">&nbsp;</td>
                            <td width="66" style="border: 1px solid black; border-collapse: collapse; padding: 5px">&nbsp;</td>
                            </tr>
                            <tr>
                            <td width="50" style="border: 1px solid black; border-collapse: collapse; padding: 5px">
                            <p>&nbsp;</p>
                            </td>
                            <td width="321" style="border: 1px solid black; border-collapse: collapse; padding: 5px">
                            <p>ii.&nbsp;Serious safety violation</p>
                            </td>
                            <td width="104" style="border: 1px solid black; border-collapse: collapse; padding: 5px">&nbsp;</td>
                            <td width="104" style="border: 1px solid black; border-collapse: collapse; padding: 5px">&nbsp;</td>
                            <td width="70" style="border: 1px solid black; border-collapse: collapse; padding: 5px">&nbsp;</td>
                            <td width="66" style="border: 1px solid black; border-collapse: collapse; padding: 5px">&nbsp;</td>
                            </tr>
                            <tr>
                            <td width="50" style="border: 1px solid black; border-collapse: collapse; padding: 5px">
                            <p>&nbsp;</p>
                            </td>
                            <td width="321" style="border: 1px solid black; border-collapse: collapse; padding: 5px">
                            <p>iii.&nbsp;Sexual harassment</p>
                            </td>
                            <td width="104" style="border: 1px solid black; border-collapse: collapse; padding: 5px">&nbsp;</td>
                            <td width="104" style="border: 1px solid black; border-collapse: collapse; padding: 5px">&nbsp;</td>
                            <td width="70" style="border: 1px solid black; border-collapse: collapse; padding: 5px">&nbsp;</td>
                            <td width="66" style="border: 1px solid black; border-collapse: collapse; padding: 5px">&nbsp;</td>
                            </tr>
                            <tr>
                            <td width="50" style="border: 1px solid black; border-collapse: collapse; padding: 5px">
                            <p>&nbsp;</p>
                            </td>
                            <td width="321" style="border: 1px solid black; border-collapse: collapse; padding: 5px">
                            <p>iv.&nbsp;Willful serious damage to Company&rsquo;s property</p>
                            </td>
                            <td width="104" style="border: 1px solid black; border-collapse: collapse; padding: 5px">&nbsp;</td>
                            <td width="104" style="border: 1px solid black; border-collapse: collapse; padding: 5px">&nbsp;</td>
                            <td width="70" style="border: 1px solid black; border-collapse: collapse; padding: 5px">&nbsp;</td>
                            <td width="66" style="border: 1px solid black; border-collapse: collapse; padding: 5px">&nbsp;</td>
                            </tr>
                            <tr>
                            <td width="50" style="border: 1px solid black; border-collapse: collapse; padding: 5px">
                            <p>&nbsp;</p>
                            </td>
                            <td width="321" style="border: 1px solid black; border-collapse: collapse; padding: 5px">
                            <p>v.&nbsp;Willful breach of agreement or trust and/or acts of dishonesty</p>
                            </td>
                            <td width="104" style="border: 1px solid black; border-collapse: collapse; padding: 5px">&nbsp;</td>
                            <td width="104" style="border: 1px solid black; border-collapse: collapse; padding: 5px">&nbsp;</td>
                            <td width="70" style="border: 1px solid black; border-collapse: collapse; padding: 5px">&nbsp;</td>
                            <td width="66" style="border: 1px solid black; border-collapse: collapse; padding: 5px">&nbsp;</td>
                            </tr>
                            <tr>
                            <td width="50" style="border: 1px solid black; border-collapse: collapse; padding: 5px">
                            <p>&nbsp;</p>
                            </td>
                            <td width="321" style="border: 1px solid black; border-collapse: collapse; padding: 5px">
                            <p>vi.&nbsp;Acts of corruption or attempts at corrupting others</p>
                            </td>
                            <td width="104" style="border: 1px solid black; border-collapse: collapse; padding: 5px">&nbsp;</td>
                            <td width="104" style="border: 1px solid black; border-collapse: collapse; padding: 5px">&nbsp;</td>
                            <td width="70" style="border: 1px solid black; border-collapse: collapse; padding: 5px">&nbsp;</td>
                            <td width="66" style="border: 1px solid black; border-collapse: collapse; padding: 5px">&nbsp;</td>
                            </tr>
                            <tr>
                            <td width="50" style="border: 1px solid black; border-collapse: collapse; padding: 5px">
                            <p>&nbsp;</p>
                            </td>
                            <td width="321" style="border: 1px solid black; border-collapse: collapse; padding: 5px">
                            <p>vii.&nbsp;Alterations to structures and fixtures without due approval</p>
                            </td>
                            <td width="104" style="border: 1px solid black; border-collapse: collapse; padding: 5px">&nbsp;</td>
                            <td width="104" style="border: 1px solid black; border-collapse: collapse; padding: 5px">&nbsp;</td>
                            <td width="70" style="border: 1px solid black; border-collapse: collapse; padding: 5px">&nbsp;</td>
                            <td width="66" style="border: 1px solid black; border-collapse: collapse; padding: 5px">&nbsp;</td>
                            </tr>
                            <tr>
                            <td width="50" style="border: 1px solid black; border-collapse: collapse; padding: 5px">
                            <p>&nbsp;</p>
                            </td>
                            <td width="321" style="border: 1px solid black; border-collapse: collapse; padding: 5px">
                            <p>viii.&nbsp;Persistent refusal to comply with Company&rsquo;s rules, regulations and ethics.</p>
                            </td>
                            <td width="104" style="border: 1px solid black; border-collapse: collapse; padding: 5px">&nbsp;</td>
                            <td width="104" style="border: 1px solid black; border-collapse: collapse; padding: 5px">&nbsp;</td>
                            <td width="70" style="border: 1px solid black; border-collapse: collapse; padding: 5px">&nbsp;</td>
                            <td width="66" style="border: 1px solid black; border-collapse: collapse; padding: 5px">&nbsp;</td>
                            </tr>
                            <tr>
                            <td width="50" style="border: 1px solid black; border-collapse: collapse; padding: 5px">
                            <p>&nbsp;</p>
                            </td>
                            <td width="321" style="border: 1px solid black; border-collapse: collapse; padding: 5px">
                            <p>ix.&nbsp;Willful and persistent disclosure of confidential information about the Company, its clients or any other matter pertaining to the Company, its operations, alliance matters, directors, staff and other family.</p>
                            </td>
                            <td width="104" style="border: 1px solid black; border-collapse: collapse; padding: 5px">&nbsp;</td>
                            <td width="104" style="border: 1px solid black; border-collapse: collapse; padding: 5px">&nbsp;</td>
                            <td width="70" style="border: 1px solid black; border-collapse: collapse; padding: 5px">&nbsp;</td>
                            <td width="66" style="border: 1px solid black; border-collapse: collapse; padding: 5px">&nbsp;</td>
                            </tr>
                            <tr>
                            <td width="50" style="border: 1px solid black; border-collapse: collapse; padding: 5px">
                            <p>&nbsp;</p>
                            </td>
                            <td width="321" style="border: 1px solid black; border-collapse: collapse; padding: 5px">
                            <p>x. Fraud and theft</p>
                            </td>
                            <td width="104" style="border: 1px solid black; border-collapse: collapse; padding: 5px">&nbsp;</td>
                            <td width="104" style="border: 1px solid black; border-collapse: collapse; padding: 5px">&nbsp;</td>
                            <td width="70" style="border: 1px solid black; border-collapse: collapse; padding: 5px">&nbsp;</td>
                            <td width="66" style="border: 1px solid black; border-collapse: collapse; padding: 5px">&nbsp;</td>
                            </tr>
                            <tr>
                            <td width="50" style="border: 1px solid black; border-collapse: collapse; padding: 5px">
                            <p>&nbsp;</p>
                            </td>
                            <td width="321" style="border: 1px solid black; border-collapse: collapse; padding: 5px">
                            <p>xi. Proven negligence, falsification and/or misrepresentation of records/facts.</p>
                            </td>
                            <td width="104" style="border: 1px solid black; border-collapse: collapse; padding: 5px">&nbsp;</td>
                            <td width="104" style="border: 1px solid black; border-collapse: collapse; padding: 5px">&nbsp;</td>
                            <td width="70" style="border: 1px solid black; border-collapse: collapse; padding: 5px">&nbsp;</td>
                            <td width="66" style="border: 1px solid black; border-collapse: collapse; padding: 5px">&nbsp;</td>
                            </tr>
                            <tr>
                            <td width="50" style="border: 1px solid black; border-collapse: collapse; padding: 5px">
                            <p>&nbsp;</p>
                            </td>
                            <td width="321" style="border: 1px solid black; border-collapse: collapse; padding: 5px">
                            <p>xii. Other acts of gross misconduct which may merit a summary dismissal in line with the country&rsquo;s case law.</p>
                            </td>
                            <td width="104" style="border: 1px solid black; border-collapse: collapse; padding: 5px">&nbsp;</td>
                            <td width="104" style="border: 1px solid black; border-collapse: collapse; padding: 5px">&nbsp;</td>
                            <td width="70" style="border: 1px solid black; border-collapse: collapse; padding: 5px">&nbsp;</td>
                            <td width="66" style="border: 1px solid black; border-collapse: collapse; padding: 5px">&nbsp;</td>
                            </tr>
                            <tr>
                            <td width="50" style="border: 1px solid black; border-collapse: collapse; padding: 5px">
                            <p>&nbsp;</p>
                            </td>
                            <td width="321" style="border: 1px solid black; border-collapse: collapse; padding: 5px">
                            <p>xiii. In any event in which:</p>
                            <p>1)&nbsp;&nbsp;&nbsp; An employee may be advised to resign or</p>
                            <p>2)&nbsp;&nbsp;&nbsp; Has been advised to resign without such employee complying with the advice within the time limited for the purpose or</p>
                            <p>3)&nbsp;&nbsp;&nbsp; Has undergone a period of suspension which does not achieve the desired effect (and with two live warning on file) and such employee is found culpable in a third offence</p>
                            </td>
                            <td width="104" style="border: 1px solid black; border-collapse: collapse; padding: 5px">&nbsp;</td>
                            <td width="104" style="border: 1px solid black; border-collapse: collapse; padding: 5px">&nbsp;</td>
                            <td width="70" style="border: 1px solid black; border-collapse: collapse; padding: 5px">&nbsp;</td>
                            <td width="66" style="border: 1px solid black; border-collapse: collapse; padding: 5px">&nbsp;</td>
                            </tr>
                            </tbody>
                            </table>
                        </div>
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                        <div style="overflow-x:auto;">
                            <table width="718" style="border: 1px solid black; border-collapse: collapse; padding: 5px; margin-left: auto; margin-right: auto;">
                            <tbody>
                            <tr>
                            <td rowspan="2" width="189" >
                            <p>&nbsp;</p>
                            <p>&nbsp;</p>
                            <p>&nbsp;</p>
                            <p>&nbsp;</p>
                            <p><strong>GRADE LEVELS</strong></p>
                            </td>
                            <td width="529" >
                            <p><strong>CADRE</strong></p>
                            </td>
                            </tr>
                            <tr>
                            <td width="529">
                            <p>&nbsp;</p>
                            <p>&nbsp;</p>
                            <p>&nbsp;</p>
                            <p><strong>PROFESSIONAL</strong><strong> PATH</strong></p>
                            </td>
                            </tr>
                            <tr>
                            <td width="189" style="border: 1px solid black; border-collapse: collapse; padding: 5px" style="border: 1px solid black; border-collapse: collapse; padding: 5px">
                            <p><strong>10.0</strong></p>
                            </td>
                            <td width="529" style="border: 1px solid black; border-collapse: collapse; padding: 5px">
                            <p>&nbsp;</p>
                            <p><strong>Managing Director (MD)</strong></p>
                            </td>
                            </tr>
                            <tr>
                            <td width="189" style="border: 1px solid black; border-collapse: collapse; padding: 5px" style="border: 1px solid black; border-collapse: collapse; padding: 5px">
                            <p><strong>9.0</strong></p>
                            </td>
                            <td width="529" style="border: 1px solid black; border-collapse: collapse; padding: 5px">
                            <p>&nbsp;</p>
                            <p><strong>Chief</strong> <strong>Operating Officer</strong></p>
                            </td>
                            </tr>
                            <tr>
                            <td width="189" style="border: 1px solid black; border-collapse: collapse; padding: 5px" style="border: 1px solid black; border-collapse: collapse; padding: 5px">
                            <p>&nbsp;</p>
                            <p><strong>8.0</strong></p>
                            </td>
                            <td width="529" style="border: 1px solid black; border-collapse: collapse; padding: 5px">
                            <p>&nbsp;</p>
                            <p><strong>General Manager</strong></p>
                            </td>
                            </tr>
                            <tr>
                            <td width="189" style="border: 1px solid black; border-collapse: collapse; padding: 5px" style="border: 1px solid black; border-collapse: collapse; padding: 5px">
                            <p>&nbsp;</p>
                            <p><strong>7.0</strong></p>
                            </td>
                            <td width="529" style="border: 1px solid black; border-collapse: collapse; padding: 5px">
                            <p>&nbsp;</p>
                            <p><strong>Assistant General Manager</strong></p>
                            </td>
                            </tr>
                            <tr>
                            <td width="189" style="border: 1px solid black; border-collapse: collapse; padding: 5px" style="border: 1px solid black; border-collapse: collapse; padding: 5px">
                            <p>&nbsp;</p>
                            <p><strong>6.0</strong></p>
                            </td>
                            <td width="529" style="border: 1px solid black; border-collapse: collapse; padding: 5px">
                            <p>&nbsp;</p>
                            <p><strong>Senior </strong><strong>Manager</strong></p>
                            </td>
                            </tr>
                            <tr>
                            <td width="189" style="border: 1px solid black; border-collapse: collapse; padding: 5px" style="border: 1px solid black; border-collapse: collapse; padding: 5px">
                            <p>&nbsp;</p>
                            <p><strong>5.0</strong></p>
                            </td>
                            <td width="529" style="border: 1px solid black; border-collapse: collapse; padding: 5px">
                            <p>&nbsp;</p>
                            <p><strong>Manager</strong></p>
                            </td>
                            </tr>
                            <tr>
                            <td width="189" style="border: 1px solid black; border-collapse: collapse; padding: 5px" style="border: 1px solid black; border-collapse: collapse; padding: 5px">
                            <p>&nbsp;</p>
                            <p><strong>4.0</strong></p>
                            </td>
                            <td width="529" style="border: 1px solid black; border-collapse: collapse; padding: 5px">
                            <p>&nbsp;</p>
                            <p><strong>Assistant Manager</strong></p>
                            </td>
                            </tr>
                            <tr>
                            <td width="189" style="border: 1px solid black; border-collapse: collapse; padding: 5px" style="border: 1px solid black; border-collapse: collapse; padding: 5px">
                            <p>&nbsp;</p>
                            <p><strong>3.0</strong></p>
                            </td>
                            <td width="529" style="border: 1px solid black; border-collapse: collapse; padding: 5px">
                            <p>&nbsp;</p>
                            <p><strong>Officer</strong></p>
                            </td>
                            </tr>
                            <tr>
                            <td width="189" style="border: 1px solid black; border-collapse: collapse; padding: 5px" style="border: 1px solid black; border-collapse: collapse; padding: 5px">
                            <p>&nbsp;</p>
                            <p><strong>2.0</strong></p>
                            </td>
                            <td width="529" style="border: 1px solid black; border-collapse: collapse; padding: 5px">
                            <p>&nbsp;</p>
                            <p><strong>Graduate</strong> <strong>Trainee</strong></p>
                            </td>
                            </tr>
                            <tr>
                            <td width="189" style="border: 1px solid black; border-collapse: collapse; padding: 5px" style="border: 1px solid black; border-collapse: collapse; padding: 5px">
                            <p>&nbsp;</p>
                            <p><strong>1.0</strong></p>
                            </td>
                            <td width="529" style="border: 1px solid black; border-collapse: collapse; padding: 5px">
                            <p>&nbsp;</p>
                            <p><strong>Intern</strong></p>
                            </td>
                            </tr>
                            </tbody>
                            </table>
                        </div>
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
					</div>
				</div>
				
			</main>
       <!--end page main-->
@endsection
