<div id="foundation" class="tabcontent">
          <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="name" 
                        required v-model="newItem.name" placeholder=" Enter some name">
          </div>
          <div class="form-group">
            <label for="age">Age:</label>
            <input type="number" class="form-control" id="age" name="age" 
            required v-model="newItem.age" placeholder=" Enter your age">
          </div>
          <div class="form-group">
            <label for="profession">Profession:</label>
            <input type="text" class="form-control" id="profession" name="profession"
            required v-model="newItem.profession" placeholder=" Enter your profession">
          </div>

          <button class="btn btn-primary" @click.prevent="createItem()" id="name" name="name">
            <span class="glyphicon glyphicon-plus"></span> ADD
          </button>

          <p class="text-center alert alert-danger"
                    v-bind:class="{ hidden: hasError }">Please fill all fields!</p>
                    <p class="text-center alert alert-danger"
                    v-bind:class="{ hidden: hasAgeError }">Please enter a valid age!</p>
          {{ csrf_field() }}
          <p class="text-center alert alert-success"
                    v-bind:class="{ hidden: hasDeleted }">Deleted Successfully!</p>
          <div class="table table-borderless" id="table">
            <table class="table table-stripe table-responsive table-hover " id="table">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Age</th>
                  <th>Profession</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tr v-for="item in items">
                <td>@{{ item.id }}</td>
                <td>@{{ item.name }}</td>
                <td>@{{ item.age }}</td>
                <td>@{{ item.profession }}</td>
                
                <td id="show-modal" @click="showModal=true; setVal(item.id, item.name, item.age, item.profession)"  class="btn btn-info" ><span
                class="glyphicon glyphicon-pencil"></span></td>
                <td @click.prevent="deleteItem(item)" class="btn btn-danger"><span
                  class="glyphicon glyphicon-trash"></span></td>
              </tr>
            </table>
          </div>
          <modal v-if="showModal" @close="showModal=false">
            <h3 slot="header">Edit Item</h3>
            <div slot="body">
              
              <input type="hidden" disabled class="form-control" id="e_id" name="id"
                  required  :value="this.e_id">
              Name: <input type="text" class="form-control" id="e_name" name="name"
                  required  :value="this.e_name">
              Age: <input type="number" class="form-control" id="e_age" name="age"
              required  :value="this.e_age">
              Profession: <input type="text" class="form-control" id="e_profession" name="profession"
              required  :value="this.e_profession">
              
              
            </div>
            <div slot="footer">
              <button class="btn btn-default" @click="showModal = false">
              Cancel
              </button>
              
              <button class="btn btn-info" @click="editItem()">
              Update
              </button>
            </div>
          </modal>
</div>
<!--modal js-->
    <script type="text/x-template" id="modal-template">
      <transition name="modal">
        <div class="modal-mask">
          <div class="modal-wrapper">
            <div class="modal-container">

              <div class="modal-header">
                <slot name="header">
                  default header
                </slot>
              </div>

              <div class="modal-body">
                <slot name="body">
                    
                </slot>
              </div>

              <div class="modal-footer">
                <slot name="footer">
                  
                  
                </slot>
              </div>
            </div>
          </div>
        </div>
      </transition>
    </script>