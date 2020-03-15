<template>
    <div class="page-inner">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a
                    href=""
                    data-target="#profile"
                    data-toggle="tab"
                    class="nav-link active"
                    >Profile</a
                >
            </li>
            <li class="nav-item">
                <a
                    href=""
                    data-target="#edit"
                    data-toggle="tab"
                    class="nav-link"
                    @click="editInfo(users[0])"
                    >Edit</a
                >
            </li>
        </ul>
        <div class="tab-content py-4">
            <div class="tab-pane active" id="profile">
                <div class="profile-cover">
                    <div class="row">
                        <div class="col-md-3 profile-image">
                            <div class="profile-image-container">
                                <img
                                    src="/admin/assets/images/default.png"
                                    alt=""
                                />
                            </div>
                        </div>
                    </div>
                </div>

                <div id="main-wrapper">
                    <div class="row" v-for="user in users" :key="user.id">
                        <div class="col-md-3 user-profile">
                            <h3 class="text-center">{{ user.name }}</h3>
                            <p class="text-center">{{ "Admin" }}</p>
                            <hr />
                            <ul class="list-unstyled text-center">
                                <li>
                                    <i class="fa fa-phone m-r-xs">
                                        {{ user.user_detail.phone }}</i
                                    >
                                </li>
                                <li>
                                    <p>
                                        <i class="fa fa-map-marker m-r-xs">
                                            {{ user.user_detail.address }}</i
                                        >
                                    </p>
                                </li>
                                <li>
                                    <p>
                                        <i class="fa fa-envelope m-r-xs"></i>
                                        <a href="#">{{ user.email }}</a>
                                    </p>
                                </li>
                            </ul>
                            <hr />
                        </div>
                        <div class="col-md-6 m-t-lg">
                            <div class="profile-timeline">
                                <ul class="list-unstyled">
                                    <li class="timeline-item">
                                        <div class="panel panel-white">
                                            <div class="panel-body">
                                                <div
                                                    class="timeline-item-header"
                                                >
                                                    <img
                                                        src="/admin/assets/images/avatar3.png"
                                                        alt=""
                                                    />
                                                    <p>
                                                        {{ user.name }}
                                                        <span
                                                            >Posted a
                                                            Status</span
                                                        >
                                                    </p>
                                                    <small>5 hours ago</small>
                                                </div>
                                                <div class="timeline-item-post">
                                                    <p>
                                                        Nullam quis risus eget
                                                        urna mollis ornare vel
                                                        eu leo. Cum sociis
                                                        natoque penatibus et
                                                        magnis dis parturient
                                                        montes, nascetur
                                                        ridiculus mus. Nullam id
                                                        dolor id nibh ultricies
                                                        vehicula.
                                                    </p>

                                                    <button
                                                        type="text"
                                                        class="btn btn-primary"
                                                    >
                                                        View
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/row-->
            </div>
            <div class="tab-pane" id="edit">
                <form role="form" method="post" action="update_profile.php">
                    <input type="hidden" name="student_id" />
                    <div class="form-group row">
                        <label
                            class="col-lg-3 col-form-label form-control-label"
                            >name</label
                        >
                        <div class="col-lg-9">
                            <input
                                class="form-control"
                                v-model="form.name"
                                placeholder="Momen Sheikh"
                                type="text"
                                name="name"
                            />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label
                            class="col-lg-3 col-form-label form-control-label"
                            >Email</label
                        >
                        <div class="col-lg-9">
                            <input
                                class="form-control"
                                v-model="form.name"
                                type="email"
                                name="email"
                                placeholder="user@gmail.com"
                            />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label
                            class="col-lg-3 col-form-label form-control-label"
                            >Address</label
                        >
                        <div class="col-lg-9">
                            <input
                                class="form-control"
                                type="text"
                                v-model="form.user_detail.address"
                                name="address"
                                placeholder="address"
                            />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label
                            class="col-lg-3 col-form-label form-control-label"
                            >Phone</label
                        >
                        <div class="col-lg-9">
                            <input
                                class="form-control"
                                type="text"
                                v-model="form.user_detail.phone"
                                name="phone"
                                placeholder="phone"
                            />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label
                            class="col-lg-3 col-form-label form-control-label"
                            >Gender</label
                        >
                        <div class="col-lg-9">
                            <input
                                class="form-control"
                                type="text"
                                v-model="form.user_detail.sex"
                                name="sex"
                                placeholder="Male/Female"
                            />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label
                            class="col-lg-3 col-form-label form-control-label"
                        ></label>
                        <div class="col-lg-9">
                            <input
                                type="submit"
                                class="btn btn-primary"
                                name="update_teacher"
                                value="Update"
                            />
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Page Inner -->
</template>
<script>
export default {
    name: "UserProfile",
    mounted() {
        console.log("component is mounted");
        axios
            .get("/api/user/" + this.userid)
            .then(({ data }) => (this.users = data));
    },
    props: ["userid"],  
    data() {
        return {
            users: {},
            form: new Form({
                id: "",
                name: "",
                email: "",
                user_detail: {
                    address: "",
                    phone: "",
                    sex: ""
                }
            })
        };
    },
    methods: {
        editInfo(users) {
            this.form.fill(users);
        }
    }
};
</script>
