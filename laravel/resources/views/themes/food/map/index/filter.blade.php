<hr class="my-4">
          <form action="#">
            <div class="row">
              <div class="col-xl-4 col-md-6 mb-4">
                <label for="form_search" class="form-label">Keyword</label>
                <div class="input-label-absolute input-label-absolute-right">
                  <div class="label-absolute"><i class="fa fa-search"></i></div>
                  <input type="search" name="search" placeholder="Keywords" id="form_search" class="form-control pr-4">
                </div>
              </div>
              <div class="col-xl-4 col-md-6 mb-4">
                <label for="form_neighbourhood" class="form-label">Neighbourhood</label>
                <select name="neighbourhood" id="form_neighbourhood" multiple data-style="btn-selectpicker" data-live-search="true" data-selected-text-format="count &gt; 1" title="" class="selectpicker form-control">
                  <option value="neighbourhood_0">Battery Park City    </option>
                  <option value="neighbourhood_1">Bowery    </option>
                  <option value="neighbourhood_2">Carnegie Hill    </option>
                  <option value="neighbourhood_3">Central Park    </option>
                  <option value="neighbourhood_4">Chelsea    </option>
                  <option value="neighbourhood_5">Chinatown    </option>
                  <option value="neighbourhood_6">Civic Center    </option>
                  <option value="neighbourhood_7">East Harlem    </option>
                  <option value="neighbourhood_8">Financial District    </option>
                  <option value="neighbourhood_9">Flatiron    </option>
                  <option value="neighbourhood_10">Garment District    </option>
                  <option value="neighbourhood_11">Gramercy Park    </option>
                  <option value="neighbourhood_12">Greenwich Village    </option>
                  <option value="neighbourhood_13">East Village    </option>
                  <option value="neighbourhood_14">West Village    </option>
                  <option value="neighbourhood_15">Hamilton Heights    </option>
                  <option value="neighbourhood_16">Harlem    </option>
                  <option value="neighbourhood_17">Hell's Kitchen / Clinton    </option>
                  <option value="neighbourhood_18">Inwood    </option>
                  <option value="neighbourhood_19">Kips Bay    </option>
                  <option value="neighbourhood_20">Lenox Hill    </option>
                  <option value="neighbourhood_21">Little Italy    </option>
                  <option value="neighbourhood_22">Lower Eastside    </option>
                  <option value="neighbourhood_23">Madison Square    </option>
                  <option value="neighbourhood_24">Manhattan Valley    </option>
                  <option value="neighbourhood_25">Meatpacking District    </option>
                  <option value="neighbourhood_26">Midtown    </option>
                  <option value="neighbourhood_27">Morningside Heights    </option>
                  <option value="neighbourhood_28">Murray Hill    </option>
                  <option value="neighbourhood_29">NoHo    </option>
                  <option value="neighbourhood_30">NoLita    </option>
                  <option value="neighbourhood_31">Roosevelt Island    </option>
                  <option value="neighbourhood_32">SoHo    </option>
                  <option value="neighbourhood_33">Stuyvesant Town (Stuyvesant Square)    </option>
                  <option value="neighbourhood_34">Sutton Place    </option>
                  <option value="neighbourhood_35">Times Square    </option>
                  <option value="neighbourhood_36">Tribeca    </option>
                  <option value="neighbourhood_37">Turtle Bay    </option>
                  <option value="neighbourhood_38">Upper Eastside    </option>
                  <option value="neighbourhood_39">Upper Westside    </option>
                  <option value="neighbourhood_40">Washington Heights    </option>
                  <option value="neighbourhood_41">Yorkville    </option>
                </select>
              </div>
              <div class="col-xl-4 col-md-6 mb-4">
                <label for="form_category" class="form-label">Category</label>
                <select name="category" id="form_category" multiple data-style="btn-selectpicker" data-selected-text-format="count &gt; 1" title="" class="selectpicker form-control">
                  <option value="category_0">Hipster    </option>
                  <option value="category_1">Music club    </option>
                  <option value="category_2">Bar    </option>
                  <option value="category_3">Pub    </option>
                  <option value="category_4">Deli    </option>
                  <option value="category_5">Bistro    </option>
                </select>
              </div>
              <div class="col-12 mb-4">
                <label class="form-label">Tag</label>
                <ul class="list-inline mb-0">
                  <li class="list-inline-item">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" id="type_0" name="type[]" class="custom-control-input">
                      <label for="type_0" class="custom-control-label">Hipster</label>
                    </div>
                  </li>
                  <li class="list-inline-item">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" id="type_1" name="type[]" class="custom-control-input">
                      <label for="type_1" class="custom-control-label">Music club</label>
                    </div>
                  </li>
                  <li class="list-inline-item">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" id="type_2" name="type[]" class="custom-control-input">
                      <label for="type_2" class="custom-control-label">Bar</label>
                    </div>
                  </li>
                  <li class="list-inline-item">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" id="type_3" name="type[]" class="custom-control-input">
                      <label for="type_3" class="custom-control-label">Pub</label>
                    </div>
                  </li>
                  <li class="list-inline-item">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" id="type_4" name="type[]" class="custom-control-input">
                      <label for="type_4" class="custom-control-label">Deli</label>
                    </div>
                  </li>
                  <li class="list-inline-item">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" id="type_5" name="type[]" class="custom-control-input">
                      <label for="type_5" class="custom-control-label">Bistro</label>
                    </div>
                  </li>
                </ul>
              </div>
              <div class="col-12 pb-4">
                <div id="moreFilters" class="collapse">
                  <div class="mb-4">
                    <label class="form-label">Cuisine</label>
                    <ul class="list-inline mb-0">
                      <li class="list-inline-item">
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" id="cuisine_0" name="cuisine[]" class="custom-control-input">
                          <label for="cuisine_0" class="custom-control-label">Fusion</label>
                        </div>
                      </li>
                      <li class="list-inline-item">
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" id="cuisine_1" name="cuisine[]" class="custom-control-input">
                          <label for="cuisine_1" class="custom-control-label">Indian</label>
                        </div>
                      </li>
                      <li class="list-inline-item">
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" id="cuisine_2" name="cuisine[]" class="custom-control-input">
                          <label for="cuisine_2" class="custom-control-label">French</label>
                        </div>
                      </li>
                      <li class="list-inline-item">
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" id="cuisine_3" name="cuisine[]" class="custom-control-input">
                          <label for="cuisine_3" class="custom-control-label">American</label>
                        </div>
                      </li>
                      <li class="list-inline-item">
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" id="cuisine_4" name="cuisine[]" class="custom-control-input">
                          <label for="cuisine_4" class="custom-control-label">Mexican</label>
                        </div>
                      </li>
                      <li class="list-inline-item">
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" id="cuisine_5" name="cuisine[]" class="custom-control-input">
                          <label for="cuisine_5" class="custom-control-label">Other</label>
                        </div>
                      </li>
                    </ul>
                  </div>
                  <div class="row">
                    <div class="col-xl-6 mb-4">
                      <label class="form-label">Price</label>
                      <div id="slider-snap" class="text-primary"></div>
                      <div class="nouislider-values">
                        <div class="min">From $<span id="slider-snap-value-from"></span></div>
                        <div class="max">To $<span id="slider-snap-value-to"></span></div>
                      </div>
                      <input type="hidden" name="pricefrom" id="slider-snap-input-from" value="40">
                      <input type="hidden" name="priceto" id="slider-snap-input-to" value="110">
                    </div>
                    <div class="col-xl-6 mb-4">
                      <label class="form-label">Vegetarians</label>
                      <ul class="list-inline mb-0">
                        <li class="list-inline-item">
                          <div class="custom-control custom-radio">
                            <input type="radio" id="vegetarians_0" name="vegetarians" class="custom-control-input">
                            <label for="vegetarians_0" class="custom-control-label">All</label>
                          </div>
                        </li>
                        <li class="list-inline-item">
                          <div class="custom-control custom-radio">
                            <input type="radio" id="vegetarians_1" name="vegetarians" class="custom-control-input">
                            <label for="vegetarians_1" class="custom-control-label">Vegetarian only</label>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-6 mb-4">
                <button type="submit" class="btn btn-primary"> <i class="fas fa-filter mr-1"></i>Filter                </button>
              </div>
              <div class="col-6 mb-4 text-right">
                <button type="button" data-toggle="collapse" data-target="#moreFilters" aria-expanded="false" aria-controls="moreFilters" data-expanded-text="Less filters" data-collapsed-text="More filters" class="btn btn-link btn-collapse pl-0 text-secondary">More filters</button>
              </div>
            </div>
          </form>
