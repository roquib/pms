@extends('layouts.master')
@section('content')
<div class="doctor_pic">
	
     <div class="container2">   
     
          <div class="row"> 
          
               <div class="col-sm-12 text-center mt-5"> 
               
                    <img class="margin_top" src="{{asset('patient/img/ddd.jpg')}}" alt="" />
                    <div class=" text-center m-auto"> 
                    
                         <span class=" text-justify">

                    <b>Name:</b> Prof.Dr.Robel khan <br />
                    <b>Specialist:</b> Dental & Maxillofacial Surgery  <br />
                    <b>Degree:</b> 
                    (MBBS, DMD, DDS)
               
                    </span>
                    
                    </div>
               
               
               
               </div>
     
          </div>
          
          
          <div class="row content_row"> 
          
          
          
               <div class="col-sm-10 m-auto mt-5"> 
               
                    <div class="doctor_text">
                    
                         Doctors are trained in medical schools which are usually part of a university. They hold a degree awarded by a medical school. Doctors work in hospitals, medical clinics, from their own offices, or may even visit people in their homes. They may also work for schools, companies, sports teams, or the military. Medical doctors are often assisted in their work by nurses. <br /><br />

                         The basic degree is awarded on the successful completion of medical school education and practice. It is given different names in different countries. It is M.D. (Doctor of Medicine) in the USA, Scotland and some other countries. In England, different universities use different terms. The University of London qualification is M.B. Ch.B. (that is, Bachelor of Medicine and Bachelor of Surgery). Most countries have higher qualifications, based on experience, supervised work, more exams, and theses. Because of its history, in England a general practitioner eventually becomes an MRCP (member of the Royal College of Physicians), but a surgeon works towards becoming an MRCS (Member of the Royal College of Surgeons). A similar system is used in Edinburgh, Ireland and Canada. 
                         <br /><br />


                         Medical doctors treat patients by finding out what is wrong with them, known as a diagnosis. They ask questions about the patient's symptoms. These might include fever or pain. They may ask about past illnesses or family members who have been sick. They will then examine the patient. They look at different parts of the body, listen to the heart and lungs with a stethoscope. Sometimes they may need to collect a sample of blood, use an x-ray machine, or use other tools. When they have gathered enough information, a doctor can make a diagnosis and then plan a treatment. Often they prescribe drugs. 
                         
                         
                         
                         <br /><br /><br /><br />
                         
                         Some types of specialists are:
                         <br /><br />
                         
                              <ul>
                              
                                   <li> Anesthesiologist, a doctor who gives anesthesia to patients</li>
                                   <li>Dentist, also known in the US as a dental surgeon, is a surgeon who specializes in dentistry — the diagnosis, prevention, and treatment of diseases and conditions of the oral cavity.</li>
                                   <li>Ophthalmologist, a doctor who specialises in treating eyes</li>
                                   <li>Podiatrist, a doctor who specialises in treating feet</li>
                                   <li>Psychiatrist, a doctor who specializes in psychiatry, and treats people with mental illness. Psychiatrists can prescribe psychiatric medication.</li>
                                   <li>Surgeon, a doctor who performs surgery</li>
                                   <li>Pediatrician, a child specialist who also knew about everything such as elderly health , mental illness ,eye problems etc.,</li>
                              </ul>
                              
                    </div>
                    
                    
               
               
               </div>
               
               
          
     
          </div>

     </div>

</div>	
@endsection

@section('css')
<style>
		
     .container2{
     
     width:1200px;
     margin:auto;
     
     
     }
     
     .margin_top {
          margin-top: 120px;
          
          
          
     }
     .doctor_text {
          margin-top: 28px;
          margin-bottom: 50px;
          
     
     }
     .row.content_row {

          background-color: #F1F1F1;
          margin-top: 45px;
     }
     
     
     
     
     
     </style>
     
@endsection