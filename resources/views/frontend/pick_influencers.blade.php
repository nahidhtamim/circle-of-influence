@extends('layouts.front')

@section('title')
    Pick Influencers - Circle Of Influence
@endsection

@section('contents')
<section class="section contact-me" data-section="section4">
  <div class="container">
    <div class="section-heading">
      <h2>Pick 3 Personal & 3 Professional Life Influencers</h2>
      <div class="line-dec"></div>
      <span
        >Fusce eget nibh nec justo interdum condimentum. Morbi justo ex,
        efficitur at ante ac, tincidunt maximus ligula. Lorem ipsum dolor
        sit amet, consectetur adipiscing elit.</span
      >
    </div>
    <div class="row">
      <div class="col-md-6">
        <h3 class="text-center">Pick 3 Personal Influencers</h3>
        <hr>
        <div class="right-content">
          <div class="container">
            <form id="contact" action="" method="post">
              <div class="row">
                <div class="col-md-12">
                  <fieldset>
                      <select id="inputState" class="form-control" name="firstPInfluencer">
                        <option selected>Pick First Influencer</option>
                        @foreach ($users as $user)
                          <option value="{{$user->id}}">{{$user->first_name}}  {{$user->last_name}}</option>
                        @endforeach
                      </select>
                  </fieldset>
                </div>
                <br>
                <div class="col-md-12">
                  <fieldset>
                    <textarea
                      name="firstPInfluencerNote"
                      rows="2"
                      class="form-control"
                      id="message"
                      placeholder="Comment About First Personal Influencer"
                      required=""
                    ></textarea>
                  </fieldset>
                </div>
                <div class="col-md-12">
                  <fieldset>
                      <select id="inputState" class="form-control" name="secondPInfluencer">
                        <option selected>Pick Second Influencer</option>
                        @foreach ($users as $user)
                          <option value="{{$user->id}}">{{$user->first_name}}  {{$user->last_name}}</option>
                        @endforeach
                      </select>
                  </fieldset>
                </div>
                <br>
                <div class="col-md-12">
                  <fieldset>
                    <textarea
                      name="secondPInfluencerNote"
                      rows="2"
                      class="form-control"
                      id="message"
                      placeholder="Comment About Second Personal Influencer"
                      required=""
                    ></textarea>
                  </fieldset>
                </div>
                <div class="col-md-12">
                  <fieldset>
                      <select id="inputState" class="form-control" name="thirdPInfluencer">
                        <option selected>Pick Third Influencer</option>
                        @foreach ($users as $user)
                          <option value="{{$user->id}}">{{$user->first_name}}  {{$user->last_name}}</option>
                        @endforeach
                      </select>
                  </fieldset>
                </div>
                <br>
                <div class="col-md-12">
                  <fieldset>
                    <textarea
                      name="thirdPInfluencerNote"
                      rows="2"
                      class="form-control"
                      id="message"
                      placeholder="Comment About Third  Personal Influencer"
                      required=""
                    ></textarea>
                  </fieldset>
                </div>
                <div class="col-md-12">
                  <fieldset>
                    <button type="submit" id="form-submit" class="button">
                      Send Message
                    </button>
                  </fieldset>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      
      <div class="col-md-6">
        <h3 class="text-center">Pick 3 Professional Influencers</h3>
        <hr>
        <div class="right-content">
          <div class="container">
            <form id="contact" action="" method="post">
              <div class="row">
                <div class="col-md-12">
                  <fieldset>
                      <select id="inputState" class="form-control" name="firstWInfluencer">
                        <option selected>Pick First Influencer</option>
                        @foreach ($users as $user)
                          <option value="{{$user->id}}">{{$user->first_name}}  {{$user->last_name}}</option>
                        @endforeach
                      </select>
                  </fieldset>
                </div>
                <br>
                <div class="col-md-12">
                  <fieldset>
                    <textarea
                      name="firstWInfluencerNote"
                      rows="2"
                      class="form-control"
                      id="message"
                      placeholder="Comment About First Professional / Work-life Influencer"
                      required=""
                    ></textarea>
                  </fieldset>
                </div>
                <div class="col-md-12">
                  <fieldset>
                      <select id="inputState" class="form-control" name="secondWInfluencer">
                        <option selected>Pick Second Influencer</option>
                        @foreach ($users as $user)
                          <option value="{{$user->id}}">{{$user->first_name}}  {{$user->last_name}}</option>
                        @endforeach
                      </select>
                  </fieldset>
                </div>
                <br>
                <div class="col-md-12">
                  <fieldset>
                    <textarea
                      name="secondWInfluencerNote"
                      rows="2"
                      class="form-control"
                      id="message"
                      placeholder="Comment About Second Professional / Work-life Influencer"
                      required=""
                    ></textarea>
                  </fieldset>
                </div>
                <div class="col-md-12">
                  <fieldset>
                      <select id="inputState" class="form-control" name="thirdWInfluencer">
                        <option selected>Pick Third Influencer</option>
                        @foreach ($users as $user)
                          <option value="{{$user->id}}">{{$user->first_name}}  {{$user->last_name}}</option>
                        @endforeach
                      </select>
                  </fieldset>
                </div>
                <br>
                <div class="col-md-12">
                  <fieldset>
                    <textarea
                      name="thirdWInfluencerNote"
                      rows="2"
                      class="form-control"
                      id="message"
                      placeholder="Comment About Third  Professional / Work-life Influencer"
                      required=""
                    ></textarea>
                  </fieldset>
                </div>
                <div class="col-md-12">
                  <fieldset>
                    <button type="submit" id="form-submit" class="button">
                      Send Message
                    </button>
                  </fieldset>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection