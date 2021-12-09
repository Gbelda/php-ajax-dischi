<div class="select d-flex justify-center">
                <h4>Select by genre:</h4>
                <select name="genre" id="genres" v-model="genre">
                    <option value="" selected>All</option>
                    <option v-for="(genre, index) in genres" :value="`${genre}`">{{genre}}</option>
                </select>
            </div>